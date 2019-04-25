<style>
#search{margin-left:10%;margin-right:10%;}
</style>
<form method="get" action="search.php" entype="multipart/form-data" id="srch">
    <center>
<input type="text" style="" id="search" class="center" name="search" placeholder="Search.." value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" autocomplete="off" required/>
<br>
<button class="btn" id="search_btn"><span class="fa fa-search"></span>&nbsp;&nbsp;Search</button>
</center>
    </form>