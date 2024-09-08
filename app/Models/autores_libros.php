<?php 

    namespace App\Models;
    use CodeIgniter\Model;

    class autores_libros extends Model{
        protected $table = 'autores_libros';
        protected $primaryKey = 'libro_id';
        protected $allowedField = [ 'autor_id'];

    }
?>