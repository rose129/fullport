Watermark 스킨 소개

이미지 또는 사진 보호를 위해 온라인에 올릴 때 이미지위에 문자 또는 로고 등을 겹쳐 이미지를 제공하는 것을 말합니다.
그누보드5에 게시판 스킨으로 작업하였습니다.
가능한 코어부분을 건들지 않기를 원하는데 여러 화일을 첨부할 때도 가능하게 하기 위해
/bbs/write_update.php (5.3.0.1)를 일부 코드를 추가하였습니다.

설치방법:
1. 다운받은 화일 압축을 풀어줍니다.
2. 그누보드5 설치화일 게시판 스킨폴더에 올립니다.
3. 화일중 write_update.php, watermark.php, watermark.png, MONOFONT.TTF 4개 화일을 /bbs 폴더로 옮깁니다.
4. 관리자화면 > 게시판관리에서 게시판 추가후 올린 스킨을 적용합니다.

** watermark이미지를 수정하고 싶을 때
watermark.png를 원하는 이미지로 교체한 후 동일 이름(watermark.png)을 줍니다.

** watermark문장을 교체하고 싶을 때
/bbs/write_update.php 에서
$watermark = "https://365ok.co.kr"; // 워터마크 문장을 교체하세요.
를 찾아주세요. (키보드에서 Ctl + F를 클릭후 365ok.co.kr입력후 엔터하면 됩니다.)
https://365ok.co.kr를 원하는 문장으로 교체해 주세요.

** 다른 게시판과 구별하기 위해 게시판명이 watermark인 경우만 반영이 됩니다.(초기)
이 부분을 바꾸고 싶으면
if($bo_table == 'watermark'){ //
이 부분을 찾아서 주석처리 또는 삭제하세요. 이 때 이 코드가 닫히는 }부분을 찾아 같이 주석처리 또는 삭제해야 합니다.

** 위에서 write_update.php을 복사하는 것이 버전으로 문제가 되면
기존 write_update.php에서 (약 540라인예상 )
// 업로드가 안된다면 에러메세지 출력하고 죽어버립니다.
$error_code = move_uploaded_file($tmp_file, $dest_file) or die($_FILES['bf_file']['error'][$i]);
와
// 올라간 파일의 퍼미션을 변경합니다.
chmod($dest_file, G5_FILE_PERMISSION);
사이에
// watermark processing start
if($bo_table == 'watermark'){ //모든 게시판에 적용할 경우 이라인 주석처리 또는 삭제하세요.
  include_once('./watermark.php');

  if ($_POST['wr_1'] == 'text_watermark') {
    // Add text watermark over image
    $watermark = "https://365ok.co.kr"; // 워터마크 문장을 교체하세요.
    addTextWatermark($dest_file, $watermark, $dest_file);
  } else if ($_POST['wr_1'] == 'image_watermark') {
    // Add image watermark over image
    $watermark = './watermark.png'; // 워터마크 이미지를 교체하세요.
    addImageWatermark($dest_file, $watermark, $dest_file, 50);
  }
}  //모든 게시판에 적용할 경우 이라인 주석처리 또는 삭제하세요.
// watermark processing end
을 넣어주세요.

** 문장 한글문제를 해결하고 싶을 때 한글이 지원하는 폰트로 MONOFONT.TTF를 바꿔 주세요.
