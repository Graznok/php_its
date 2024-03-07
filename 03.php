<?php include("header.php"); 
?>
<?php  
if (isset($_GET["page"])) {
    $page = $_GET["page"];
    if ($page=="services") {
        include("services.php");
    }else if($page="contact"){
        include("contact.php");
    }



}else{

?>
<h1>Avalehe asjad</h1>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam eveniet, expedita veritatis itaque quam alias eius adipisci commodi dicta praesentium mollitia? 
    Voluptas suscipit alias inventore, commodi iusto dolorem totam officia.</p>

<?php
}
?>
<?php include("footer.php");    
?>