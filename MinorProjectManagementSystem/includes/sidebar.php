        <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php?page=home"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                   
                    <li class=''>
                        <a href="index.php?page=employee&io=1"><i class="fa fa-fw fa-users"></i> Student List</a>
                    </li>
                    <li>
                        <a href="index.php?page=project_list&io=1"><i class="fa fa-fw fa-files-o"></i> Minor Project List</a>
                    </li>
                <?php if($_SESSION['TYPE'] == 1): ?>
                    <li class=''>
                    <a href="index.php?page=user_list&io=1"><i class="fa fa-users"></i> Users</a>
                    </li>
                <?php endif; ?>    
                    <li>
                        <a id="dem3" href="javascript:;" data-toggle="collapse" data-target="#demo3"><i class="fa fa-fw fa-gears"></i> Updates       <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo3" class="collapse">
                        
                             <li>
                                <a href="index.php?page=position"><i class="fa fa-fw fa-file-o"></i>Guides</a>
                            </li>
                             <li>
                                <a href="index.php?page=division"><i class="fa fa-fw fa-file-o"></i>Minor Project Modules</a>
                            </li>
                            <li style="">
                                <a href="index.php?page=project_team"><i class="fa fa-fw fa-users"></i>Minor Project Team</a>
                            </li>
                        </ul>
                    </li>
    </ul>
<script>
    var _h = location.href  
        $('.side-nav a').each(function(){
            if(_h.includes($(this).attr("href")) == true){
                $(this).closest('li').addClass('active')
            }
        })
</script>