Watermark ��Ų �Ұ�

�̹��� �Ǵ� ���� ��ȣ�� ���� �¶��ο� �ø� �� �̹������� ���� �Ǵ� �ΰ� ���� ���� �̹����� �����ϴ� ���� ���մϴ�.
�״�����5�� �Խ��� ��Ų���� �۾��Ͽ����ϴ�.
������ �ھ�κ��� �ǵ��� �ʱ⸦ ���ϴµ� ���� ȭ���� ÷���� ���� �����ϰ� �ϱ� ����
/bbs/write_update.php (5.3.0.1)�� �Ϻ� �ڵ带 �߰��Ͽ����ϴ�.

��ġ���:
1. �ٿ���� ȭ�� ������ Ǯ���ݴϴ�.
2. �״�����5 ��ġȭ�� �Խ��� ��Ų������ �ø��ϴ�.
3. ȭ���� write_update.php, watermark.php, watermark.png, MONOFONT.TTF 4�� ȭ���� /bbs ������ �ű�ϴ�.
4. ������ȭ�� > �Խ��ǰ������� �Խ��� �߰��� �ø� ��Ų�� �����մϴ�.

** watermark�̹����� �����ϰ� ���� ��
watermark.png�� ���ϴ� �̹����� ��ü�� �� ���� �̸�(watermark.png)�� �ݴϴ�.

** watermark������ ��ü�ϰ� ���� ��
/bbs/write_update.php ����
$watermark = "https://365ok.co.kr"; // ���͸�ũ ������ ��ü�ϼ���.
�� ã���ּ���. (Ű���忡�� Ctl + F�� Ŭ���� 365ok.co.kr�Է��� �����ϸ� �˴ϴ�.)
https://365ok.co.kr�� ���ϴ� �������� ��ü�� �ּ���.

** �ٸ� �Խ��ǰ� �����ϱ� ���� �Խ��Ǹ��� watermark�� ��츸 �ݿ��� �˴ϴ�.(�ʱ�)
�� �κ��� �ٲٰ� ������
if($bo_table == 'watermark'){ //
�� �κ��� ã�Ƽ� �ּ�ó�� �Ǵ� �����ϼ���. �� �� �� �ڵ尡 ������ }�κ��� ã�� ���� �ּ�ó�� �Ǵ� �����ؾ� �մϴ�.

** ������ write_update.php�� �����ϴ� ���� �������� ������ �Ǹ�
���� write_update.php���� (�� 540���ο��� )
// ���ε尡 �ȵȴٸ� �����޼��� ����ϰ� �׾�����ϴ�.
$error_code = move_uploaded_file($tmp_file, $dest_file) or die($_FILES['bf_file']['error'][$i]);
��
// �ö� ������ �۹̼��� �����մϴ�.
chmod($dest_file, G5_FILE_PERMISSION);
���̿�
// watermark processing start
if($bo_table == 'watermark'){ //��� �Խ��ǿ� ������ ��� �̶��� �ּ�ó�� �Ǵ� �����ϼ���.
  include_once('./watermark.php');

  if ($_POST['wr_1'] == 'text_watermark') {
    // Add text watermark over image
    $watermark = "https://365ok.co.kr"; // ���͸�ũ ������ ��ü�ϼ���.
    addTextWatermark($dest_file, $watermark, $dest_file);
  } else if ($_POST['wr_1'] == 'image_watermark') {
    // Add image watermark over image
    $watermark = './watermark.png'; // ���͸�ũ �̹����� ��ü�ϼ���.
    addImageWatermark($dest_file, $watermark, $dest_file, 50);
  }
}  //��� �Խ��ǿ� ������ ��� �̶��� �ּ�ó�� �Ǵ� �����ϼ���.
// watermark processing end
�� �־��ּ���.

** ���� �ѱ۹����� �ذ��ϰ� ���� �� �ѱ��� �����ϴ� ��Ʈ�� MONOFONT.TTF�� �ٲ� �ּ���.
