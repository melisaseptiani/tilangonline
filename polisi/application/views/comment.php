<html>
<head>
    <title>Cara Membuat Comment Menggunakan set_flashdata pada Codeigniter</title> 
    <style>
        *{margin: 0; padding: 0}
        .container{width: 800px; margin: auto;}
        p{color:white; background: green; width: 400px; margin: 10px 0;}
    </style>
</head>
    <body> 
    <div class="container">
          <h3>Notifikasi set_flashdata pada Codeigniter </h3>
          <p><?php echo $this->session->flashdata('data'); ?></p> 
             
     </div>
   </body>
</html>