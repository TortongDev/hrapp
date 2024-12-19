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
		header.mobile {display: none;}
		aside.left {}

		@media only screen and (max-width: 600px) {
			header.mobile {
				
			}
			header {display: none;}
			aside.left {display: none;}
			aside.mobile {}
			section.wrapper-content {
				transition: .5s;
				padding-inline-start: 0px;}
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
    <header class="mobile">
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
