<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> </head>
        <link rel="stylesheet" href="./css/public.css" />
        <link rel="stylesheet" href="./css/about.css" />
    </head>
    <body>
        <div class="bannerBox">
            <div class="navBox">
                <div class="logoBox">
                    <img src="resource/images/yue_logo.png" />
                    <span>乐器乌托邦 <b>乐器.生活.交友</b></span>
                </div>
                <div class="menuBox">
                    <?php include("public/menu.php"); ?>

                    <div class="selectedMenuBox" style="left:500"></div>
                </div>  
            </div>

            <div class="bannerHint">关于我们<br/>About US</div>
            <div class="bannerAlphaBg"></div>
        </div>

        <div class="aboutBox" style="height:180px;">
            <div class="aboutMenuBox">
                <a href="./about.php"><div class="aboutMenuItem" style="border-top-left-radius: 5px;">关于乐器乌托邦</div></a>
                <a href="./history.php"><div class="aboutMenuItem">发展史</div></a>
                <a href="./teamMember.php"><div class="aboutMenuItem selected" style="border-top-right-radius: 5px;">团队成员</div></a>
            </div>

            <div class="teamContent">
                <p>摩拜单车是一个极富创造力和凝聚力的团队，整个团队致力于「让自行车回归城市」，为城市骑行打造全新体验。</p>
            </div>
        </div>

        <div class="teamItemBox">
            <div class="photoBox">
                <img src="resource/images/header4.jpeg" height="100%"/>
            </div>
            <div class="userInfo">
                <h3>李蔚轩</h3>
                <p>乐器乌托邦 CEO</p>
                <div>解决乐器社交领域社交难问题，提供乐器领域各类社交服务，帮助乐器爱好者快速寻找志同道合的群体。</div>
            </div>
        </div>

        <div class="teamItemBox" style="margin-bottom:50px;">
            <div class="photoBox">
                <img src="resource/images/header4.jpeg" height="100%"/>
            </div>
            <div class="userInfo">
                <h3>臧波涛</h3>
                <p>乐器乌托邦 COO</p>
                <div>曾担任公司运营经理，负责产品运营，推广，企划</div>
            </div>
        </div>

        <div class="teamItemBox" style="margin-bottom:50px;">
            <div class="photoBox">
                <img src="resource/images/header4.jpeg" height="100%"/>
            </div>
            <div class="userInfo">
                <h3>胡渊</h3>
                <p>乐器乌托邦 CTO</p>
                <div>负责公司的技术架构，技术运维，将技术与乐器服务结合，为用户提供更好的体验</div>
            </div>
        </div>



        <?php include("public/footer.php"); ?>
        
    </body>
</html>