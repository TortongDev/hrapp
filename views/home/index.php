<?php
$setHoverMenu = "active-menu";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9a194cfb78.js" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sriracha&display=swap');
        </style>
    <style>
        :root {
            --bg-white-app: rgb(228, 228, 228);
            --black: black;
            --silver: silver;
            --gray: gray;
            --gray2: #4a4a4a;
        }
        html, body {
            font-family: "Sriracha", cursive;
            margin: 0;
            box-sizing: border-box;
            background-color: rgb(238, 238, 238);
        }
        header {
            top: 0;
            position: fixed;
            min-width: 100vw;
            height: 50px;
            background-color: var(--bg-white-app);
            color: var(--black);
            display: flex;
            align-items: center;
            font-weight: 500;
            font-size: 1.2rem;
            justify-content: space-between;
            z-index: 99;
            box-shadow: 1px 1px 10px 1px;
            .header-title {
                width: 250px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .header-users {
                padding-inline-end: 50px;
            }
            .header-users {
                width: 550px;
                display: flex;
                justify-content: end;
            }
            .header-users >* {
                padding: 10px;
            }
        }
        aside {
            overflow: scroll;
            transition: 0.5s;
            top: 50px;
            box-shadow: 1px 1px 10px 1px;
            width: 250px;
            height: 100%;
            color: var(--black);
            position: fixed;
            background-color:var(--bg-white-app);
            h1.header-tab-menu {
                background-color: var(--silver);
                font-size: 1.2rem;
                height: 50px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
        }
        section.menu-section-1 {
            margin-block: 10px;
            ul {
                width: 100%;
                padding: 0;
                list-style: none;
                margin: 0;
                li {
                    padding-left: 20px;
                    text-align: left;
                    padding-block: 10px;
                    a {
                        color: var(--gray2);
                        text-decoration: none;
                    }
                }
                li:hover {
                    background-color: rgba(101, 148, 187, 0.2);
                    transition: 1s;
                }
            }
        }
        section.menu-all {
            width: 100%;
            height: 40px;
            display: flex;
            align-items: center;
            background-color: rgba(29, 60, 85, 0.5);
        }
        section.app {
            min-width: 100vw;
            height: 100%;
            margin-top: 50px;
        }
        section.wrapper-content {
            transition: .5s;
            padding-inline-start: 250px;
            nav.menu-all {
                width: 100%;
                color: blue;
                height: 50px;
                display: flex;
                align-items: center;
                border: 1px silver solid;
                padding-inline: 10px;
                justify-items: flex-end;
                ul {
                    list-style: none;
                    margin: 0;
                    padding: 0;
                    li {
                        padding: 20px;
                        float: left;
                    }
                    
                }

            }
            .content {
                padding-inline: 29px;
                padding-block: 10px;
                .content-title {
                    font-size: 1.5rem;
                }
            }
        }
        .side-off {
            overflow: hidden;
            width: 0px !important;
            transition: .5s;
        }
        .wrapper-content-side-start {
            padding-inline-start: 0px !important;
        }
        select {
            font-size: .85rem;
        }
        ::-webkit-scrollbar {
            width: 0px; /* ความกว้างแนวตั้ง */
            /* height: 12px; ความสูงแนวนอน */
        }
		.active-menu {
			background-color:  rgba(101, 148, 187, 0.2);
		}
    </style>
</head>
<body>
    <header>
        <section class="header-title">Logo Hrapp</section>
        <section class="header-users">
            <div class="username"><i class="fa-solid fa-user"></i> develop_tortong</div>
            <div class="setting_user"><i class="fa-solid fa-gear"></i> setting</div>
            <div class="logout"><i class="fa-solid fa-right-from-bracket"></i> logout</div>
            <div class="league">
                <select name="" id="">
                    <option value="">TH</option>
                    <option value="">EN</option>
                </select>
            </div>
        </section>
    </header>
    <section class="app">

        <aside class="left">
            <h1 class="header-tab-menu">ระบบต่างๆ</h1>
            <section class="menu-section-1">
                <!-- <ul>
                    <li><a href="">สรรหาบุคลากร (Recruitment Management)</a></li>
                    <li><a href="">จัดการข้อมูลพนักงาน (Employee Information Management)</a></li>
                    <li><a href="">การเงินและสวัสดิการ (Payroll and Benefits)</a></li>
                    <li><a href="">บริหารเวลาและการเข้างาน (Time and Attendance Management)</a></li>
                    <li><a href="">พัฒนาทรัพยากรบุคคล (Learning and Development)</a></li>
                    <li><a href="">การประเมินผล (Performance Management)</a></li>
                    <li><a href="">การลา (Leave Management)</a></li>
                </ul> -->
                <ul>
                    <li><a href=""><i class="fa-solid fa-folder-minus"></i> สรรหาบุคลากร</a></li>
                    <li><a href=""><i class="fa-solid fa-folder-minus"></i> จัดการข้อมูลพนักงาน</a></li>
                    <li class="active-menu"><a href=""><i class="fa-solid fa-folder-minus"></i> การเงินและสวัสดิการ</a></li>
                    <li><a href=""><i class="fa-solid fa-folder-minus"></i> บริหารเวลาและการเข้างาน</a></li>
                    <li><a href=""><i class="fa-solid fa-folder-minus"></i> พัฒนาทรัพยากรบุคคล</a></li>
                    <li><a href=""><i class="fa-solid fa-folder-minus"></i> การประเมินผล</a></li>
                    <li><a href=""><i class="fa-solid fa-folder-minus"></i> การลา</a></li>
                </ul>
            </section>
            <h1 class="header-tab-menu">ตั้งค่ารายงาน</h1>
            <section class="menu-section-1">
                <ul>
                    <li><a href=""><i class="fa-solid fa-eye"></i> รายงานพนักงานลางาน</a></li>
                    <li><a href=""><i class="fa-solid fa-eye-slash"></i> รายงานสวัสดิการ</a></li>
                    <li><a href=""><i class="fa-solid fa-eye-slash"></i> รายงานประเมินผลการผ่านงาน</a></li>
                    <li><a href=""><i class="fa-solid fa-eye"></i> รายงานประเมินโบนัสพนักงาน</a></li>
                    <li><a href=""><i class="fa-solid fa-eye"></i> รายงาน job weekly พนักงาน</a></li>
                    
                    <!-- <li><a href="">สมัครงาน</a></li>
                    <li><a href="">บัญชี</a></li>
                    <li><a href="">การทำงาน</a></li>
                    <li><a href="">ลางาน</a></li> -->
                </ul>
            </section>
            <h1 class="header-tab-menu">ตั้งค่ารายงาน</h1>
            <section class="menu-section-1">
                <ul>
                    <li><a href=""><i class="fa-solid fa-eye"></i> รายงานพนักงานลางาน</a></li>
                    <li><a href=""><i class="fa-solid fa-eye-slash"></i> รายงานสวัสดิการ</a></li>
                    <li><a href=""><i class="fa-solid fa-eye-slash"></i> รายงานประเมินผลการผ่านงาน</a></li>
                    <li><a href=""><i class="fa-solid fa-eye"></i> รายงานประเมินโบนัสพนักงาน</a></li>
                    <li><a href=""><i class="fa-solid fa-eye"></i> รายงาน job weekly พนักงาน</a></li>
                    
                    <!-- <li><a href="">สมัครงาน</a></li>
                    <li><a href="">บัญชี</a></li>
                    <li><a href="">การทำงาน</a></li>
                    <li><a href="">ลางาน</a></li> -->
                </ul>
            </section>
            <h1 class="header-tab-menu">ตั้งค่ารายงาน</h1>
            <section class="menu-section-1">
                <ul>
                    <li><a href=""><i class="fa-solid fa-eye"></i> รายงานพนักงานลางาน</a></li>
                    <li><a href=""><i class="fa-solid fa-eye-slash"></i> รายงานสวัสดิการ</a></li>
                    <li><a href=""><i class="fa-solid fa-eye-slash"></i> รายงานประเมินผลการผ่านงาน</a></li>
                    <li><a href=""><i class="fa-solid fa-eye"></i> รายงานประเมินโบนัสพนักงาน</a></li>
                    <li><a href=""><i class="fa-solid fa-eye"></i> รายงาน job weekly พนักงาน</a></li>
                    
                    <!-- <li><a href="">สมัครงาน</a></li>
                    <li><a href="">บัญชี</a></li>
                    <li><a href="">การทำงาน</a></li>
                    <li><a href="">ลางาน</a></li> -->
                </ul>
            </section>
        </aside>
        <section class="wrapper-content">
            <nav class="menu-all">
                <ul>
                    <li class="bar-slide"><i class="fa-solid fa-bars"></i></li>
                    <li><a href="">สวัสดิการเกี่ยวกับการลางาน</a></li>
                    <li><a href="">ข้อมูลเงินเดือน</a></li>
                    <li><a href="">ออกสลิปเงินเดือน</a></li>
                    <li><a href="">ข้อข้อมูลวันหุดด</a></li>
                </ul>
            </nav>
            <div class="content">
                <h1 class="content-title mt-3 mb-3">Header Lorem.</h1>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis animi amet autem exercitationem non perferendis? Optio, voluptatum repellendus? Eligendi molestias deserunt amet voluptates. Quam accusamus ipsam maxime, aut harum odio libero inventore voluptatibus. Autem voluptatum praesentium maxime? Distinctio ratione, sed animi consequuntur tenetur ullam facilis deserunt similique itaque tempore magni quidem, earum cupiditate, libero corrupti quo eaque voluptate eveniet dignissimos? Perspiciatis ipsam culpa corporis. Dolore similique deleniti ut exercitationem, obcaecati facilis harum soluta doloribus praesentium debitis esse nisi reiciendis quas laudantium culpa commodi pariatur cupiditate accusamus ipsam provident quos? Voluptatibus exercitationem libero assumenda laborum similique. Corporis, pariatur tempora esse officia, placeat cupiditate rerum velit maxime praesentium minus qui, beatae voluptatum magnam ex at. Totam, maiores quia. Odio omnis error commodi odit placeat illum! Molestiae unde aperiam rem voluptatum quasi repellendus sed sit dolorum dolore nam sequi enim dignissimos, excepturi distinctio ab atque? Nulla dicta assumenda voluptate amet quas a inventore? Perspiciatis fugiat aspernatur quae magnam, nesciunt ducimus dolores officiis molestias culpa distinctio inventore maiores! Fugit facere est cumque dolorem, consequuntur delectus qui itaque omnis deserunt magnam nam, minima similique? At nesciunt debitis eaque quisquam eveniet corrupti corporis molestias aspernatur. Alias deserunt enim ipsum ducimus incidunt eveniet id porro non, natus, culpa cumque, est excepturi ratione consectetur. Magni ex aspernatur molestiae perferendis nobis ipsum, sed ea optio voluptates, quis pariatur porro similique tenetur tempore temporibus enim odio fuga. Eos magnam mollitia architecto animi ullam cum natus, culpa aliquam nihil odit impedit dolor dolorum quis assumenda explicabo, veritatis, quas quam quibusdam. Necessitatibus blanditiis asperiores nulla repudiandae molestiae et quia esse consectetur atque? Quam amet saepe, quod eligendi at sed deserunt quos. Itaque libero aperiam, dolor id velit perspiciatis sint tempora vitae adipisci provident explicabo iusto sit expedita voluptate est, asperiores incidunt quia magnam beatae dolores corporis accusamus inventore veritatis alias. Eaque pariatur, autem quam maxime nisi voluptas nobis nihil? Quod voluptatum dolore necessitatibus cum officia molestias, vel veniam velit ipsam possimus excepturi consectetur aliquid eaque sequi nesciunt quasi numquam harum? Velit tempore unde quaerat officia pariatur illo? Sapiente omnis nesciunt dolorum aliquam cupiditate, dolore unde excepturi consequatur amet, labore rem expedita eligendi quam laboriosam repudiandae sint voluptatibus corrupti exercitationem maxime. Aperiam nihil hic omnis, pariatur suscipit nam culpa assumenda natus sint velit at libero fuga harum tenetur asperiores ad aspernatur. Odit obcaecati voluptas itaque impedit. Exercitationem temporibus incidunt consectetur voluptates? Nulla quod, alias vel accusamus cumque obcaecati sequi voluptatibus fugiat voluptatem! Voluptatem, possimus. Cum vel ullam, soluta, dignissimos id veritatis nobis illum, atque voluptas doloribus aperiam dolor suscipit optio velit. Quas provident commodi, odit harum labore, dolores aut obcaecati accusantium tenetur non consectetur ratione laborum quibusdam inventore odio numquam eveniet autem deserunt. Aut distinctio illo in porro pariatur? Consequatur odio dignissimos praesentium, laboriosam consequuntur, error vel molestiae animi doloribus soluta deleniti. Eveniet similique accusantium possimus iusto nulla obcaecati eaque, quod ea commodi fugiat voluptatibus mollitia alias repellat dicta aspernatur eius reiciendis facere earum minus aliquam corrupti error accusamus. Debitis unde, ipsum aperiam pariatur quidem, fugiat ducimus, repudiandae quaerat neque ratione laborum! Placeat distinctio tempora in delectus commodi ipsam enim nesciunt? Aspernatur possimus corporis id placeat molestias sequi ad culpa modi. Consectetur, ipsum hic. Sed facilis nihil molestias soluta ratione quos aspernatur quod unde dignissimos corrupti illo fugit magni quidem, quas quisquam. Iure odit, eligendi cumque labore, neque exercitationem quam corporis dolorem voluptatibus vitae ad natus reiciendis rerum facere ratione veniam deleniti unde vero. Incidunt a dolores, corrupti voluptatibus sapiente provident doloremque eaque dicta vitae nam, vero perspiciatis asperiores? Magni, nostrum maxime aspernatur necessitatibus placeat cumque repudiandae est sunt aut accusantium iste odit nisi laborum ducimus dolore culpa optio iure quaerat vel? Eius deserunt esse amet earum voluptatibus. Commodi quidem cupiditate dolore fuga amet in cumque obcaecati deleniti necessitatibus eligendi, praesentium nihil suscipit, assumenda perspiciatis molestias quas perferendis impedit dolor repellat quia aperiam. Ipsum velit consequatur veniam. Alias quae repellat illo consequatur cum libero similique fugiat, architecto molestias temporibus. Hic, officiis sint culpa magni autem officia quod ratione ut? Nihil qui ullam sit nam ad quam architecto rem officia quas doloremque aspernatur dolores quaerat amet illo unde id molestiae est, dolorum nemo consectetur, commodi odio? Debitis sunt ea, exercitationem quidem rem error magni ut quasi dolores, quam pariatur repellendus voluptatum eaque eveniet odit illo beatae quae consequuntur! Cupiditate voluptatum nobis assumenda recusandae, in architecto modi natus cum itaque at corporis blanditiis deserunt autem veniam explicabo alias magni nesciunt odio inventore eaque maxime sit officiis odit numquam. Fugiat quam ad animi illum. Dolore inventore officiis recusandae distinctio, incidunt provident dignissimos consequatur fugit, corrupti impedit nisi, autem accusantium modi. Harum deleniti molestiae accusantium laborum, consequatur rerum? Placeat ipsum deserunt eveniet eligendi, eum magni delectus nobis at. Odit dolorem tenetur, iure unde error et, nemo cupiditate beatae omnis tempora consequuntur nesciunt voluptate veniam quia laborum assumenda. Incidunt aliquam maxime laboriosam sit dolorum! Sapiente facere iste magni error maiores consequuntur provident earum. Voluptatum aut, iusto sint dignissimos et voluptate voluptatem labore atque fuga autem odio minus perspiciatis assumenda nemo magnam odit sit? Tenetur iusto necessitatibus facere aliquid veniam? Fuga deleniti harum debitis, alias et voluptate qui dolorum eum corporis molestias temporibus dignissimos! Placeat, perferendis doloremque inventore laborum hic odio aut, ipsa, et delectus doloribus libero! Eaque, facere alias, veniam dolor dolore eos numquam quia doloremque expedita voluptatum non quam consequuntur quod assumenda sed dolorem porro, accusantium temporibus fugiat debitis perferendis omnis harum. Corrupti incidunt ullam quod ipsum aliquid officiis magni dolor, molestias consequuntur perspiciatis quisquam. Repellat at vel odio possimus in dolorum cumque quos? Rem ullam sapiente mollitia alias quod in molestias eaque? Rem consequuntur tenetur magnam incidunt dolorem est, eum doloribus blanditiis aperiam voluptatum, qui delectus dolor sapiente accusamus reiciendis dolores similique magni. Blanditiis quidem animi exercitationem alias vero officiis quibusdam mollitia, molestias dolores sint reprehenderit suscipit quas corrupti obcaecati voluptatem nesciunt aliquam culpa porro quae illo aspernatur pariatur amet consequuntur. Nam, nemo ipsam modi quasi expedita nobis omnis et velit unde amet dignissimos possimus corporis fuga eum non illum? Nesciunt, numquam ducimus. Fugit explicabo velit animi suscipit doloremque, similique perferendis illum doloribus, itaque totam aut!
            </div>
        </section>
        
    </section>
    <script>
        let aside = document.querySelector('aside');
        let wrapper_content = document.querySelector('.wrapper-content');
        document.querySelector('.bar-slide').addEventListener('click', function(){
            // wrapper-content {
            console.log(wrapper_content);
            
            //     padding-inline-start: 250px;
            if(aside.classList.contains('side-off') === false){
                aside.classList.add('side-off')
                wrapper_content.classList.add('wrapper-content-side-start')
            }else{
                aside.classList.remove('side-off')
                wrapper_content.classList.remove('wrapper-content-side-start')

            }
        })

    </script>
</body>
</html>
