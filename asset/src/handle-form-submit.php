<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hoTen = isset($_POST['full_name']) ? $_POST['full_name'] : '';
    $sdt = isset($_POST['phone_number']) ? $_POST['phone_number'] : '';
    $tinhTPId =   isset($_POST['tinh_tp']) ? $_POST['tinh_tp'] : '';
    $tinhTP = isset($_POST['provinceName']) ? $_POST['provinceName'] : '';
    $quanHuyenId =  isset($_POST['quan_huyen']) ? $_POST['quan_huyen'] : '';
    $quanHuyen =  isset($_POST['districtsName']) ? $_POST['districtsName'] : '';
    $phuongXaId =  isset($_POST['phuong_xa']) ? $_POST['phuong_xa'] : '';
    $phuongXa =  isset($_POST['wardsName']) ? $_POST['wardsName'] : '';
    $soNha =  isset($_POST['so_nha']) ? $_POST['so_nha'] : '';
    $loaiCua =  isset($_POST['loai_cua']) ? $_POST['loai_cua'] : '';
    $soLuong =  isset($_POST['so_luong']) ? $_POST['so_luong'] : '';

    $data = array(
        "error" => 'false',
        "message" => "Dữ liệu gửi đi thành công!",
        "hoTen" => $hoTen,
        "sdt" => $sdt,
        "tinhTP" => trim($tinhTP),
        "quanHuyen" => trim($quanHuyen),
        "phuongXa" => trim($phuongXa),
        "soNha" => $soNha,
        "loaiCua" => $loaiCua,
        "soLuong" => $soLuong
    );
    validateForm();
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
}

function validateForm(){
    $errors = array();

    if (empty($_POST['full_name'])) {
        $errors['error'] = 'true';
        $errors['full_name'] = 'Full name is required';
    }

    if (!empty($errors)) {
        echo json_encode($errors);
        exit;
    }
}
function phoneNumber($str) {
    return (!preg_match("/^(0|\+84|084|84)[0-9]{9}$/", $str)) ? FALSE : TRUE;
}
?>