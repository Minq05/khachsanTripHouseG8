<?php
class AdminDanhMucPhongController{
    public $modelDanhMucPhong;
    public function __construct()
    {
        $this->modelDanhMucPhong = new AdminDanhMucPhong();
    }

    public function danhSachDanhMucPhong(){
        
        $listDanhMuc = $this->modelDanhMucPhong->getAllDanhMucPhong();

        require_once './views/danhmucphong/listDanhMucPhong.php';
    }
    public function formAddDanhMucPhong(){
        // Ham nay dung de hien thi form nhap
        require_once './views/danhmucphong/addDanhMucPhong.php';
        // deleteSessionError();
    }
    
    public function formEditDanhMucPhong(){
        // Ham nay dung de hien thi form nhap
        // Lay ra thong tin cua danh muc can sua
        // $id = $_GET['id_danh_muc'];
        // $danhmuc = $this->modelDanhMucPhong->getDetailDanhMucPhong($id);
        // if($danhmuc){
            require_once './views/danhmucphong/editDanhMucPhong.php';
        // }else{
        //     header("Location: " . BASE_URL_ADMIN . '?act=danh-muc-phong');
        //         exit();
        // }
    }
}
?>