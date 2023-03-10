<?php
namespace App\Models;

use App\Models\Model; 

use App\Models\database as DB;

 class Page_home extends Model
{

   public $db;

   public function __construct()
   {
      $this->db = new DB;
   }


   public function sl_loai()
   {
      $showsl = "SELECT loai.ma_loai,ten_loai, COUNT(sp.ma_loai) as 'so_luong' FROM `loai` LEFT JOIN `sp` on `sp`.ma_loai = `loai`.ma_loai  GROUP BY loai.ma_loai ORDER by COUNT(sp.ma_loai); ";
      return $this->db->pdo_query($showsl);
   }

   public function sl_pay()
   {
      $sql = "SELECT COUNT(trang_thai_sp) as 'sl_ttsp',ma_loai FROM `sp` WHERE `trang_thai_sp` >= 1 ";
      return $this->db->pdo_query($sql);
   }



   public function danhmuc()
   {
      $sql = 'SELECT * FROM `loai`';

      return $this->db->pdo_query($sql);
   }



   public function product_new()
   {
      $query = "SELECT * FROM `sp`  where trang_thai_sp = 0  ORDER by ma_sp DESC";

      return $this->db->pdo_query($query);
   }
   public function showproductSALE()
   {
      $query = "SELECT * FROM `sp`   where trang_thai_sp = 0  and giam_gia >0";

      return $this->db->pdo_query($query);
   }


   
   public function __destruct()
   {
      $this->db = null;
   }
}
