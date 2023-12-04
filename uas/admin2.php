<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your head content goes here -->
</head>
<body>
    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="admin2.php?page=dataadmin"></a>
        </nav>
    </div>

    <?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        switch ($page) {
            case 'dataadmin':
                include "indexadmin.php"; 
                break;
            case 'del_r':
                include "delete_admin.php"; 
                break;         
            case 'tambahmenuu':
                include "tambahmenu.php"; 
                break;  
                case 'editmenu':
                    include "edit_menu.php"; 
                    break;            
            default:
                echo "Maaf, Halaman Ini Masih dalam Pengembangan";
                break; 
        }
    }
    ?> 
</body>
</html>
