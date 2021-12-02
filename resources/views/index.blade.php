<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Ohmyo's Portfolio</title>
    <meta name="description" content="웹 개발자를 꿈꾸는 개린이의 퍼블리싱 포트폴리오입니다.">
    <meta name="author" content=Ohmyo">
    <link rel="icon" type="image/png" href="public/image/">
    <script src="https://kit.fontawesome.com/bfea3f368e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/moonspam/NanumSquare@1.0/nanumsquare.css">

    <script src="main.js" defer></script> {{-- html 이 파싱되는 동안 js 파일을 동시에 다운, html 완료 후 js를 불러옴 --}}
</head>
<body>

<section id="home">
    {{--  Navbar  --}}
    <nav id="navbar">
        <div class="navbar__logo">
            <i class="fas fa-cat"></i>
            <a href="#">OHMYO</a>
        </div>
        <ul class="navbar__menu">
            <li class="navbar__menu__item active">Home</li>
            <li class="navbar__menu__item">About</li>
            <li class="navbar__menu__item">Skills</li>
            <li class="navbar__menu__item">My work</li>
            <li class="navbar__menu__item">Contact</li>
        </ul>
    </nav>
    <img src="/image/profile.png" alt="ohmyo's profile photo" class="home__avatar"/>
    <h1 class="home__tile">Hello,<br>I'm JungEun Oh</h1>
    {{--        <h1 class="home__tile">안녕하세요 오정은입니다.</h1>--}}
    <h2 class="home__description">고양이(猫)를 좋아하는 웹 디자이너 출신 개발자</h2>
    {{--        <button class="home__contact">Contact Me</button>--}}
</section>
{{--  About  --}}
<section id="about" class="section">
    <h1>About me</h1>
    <p>
        1년 동안 웹 디자이너로 근무하면서 포토샵, 일러스트를 활용한 디자인 및 HTML5, CSS3, JS를 퍼블리싱 작업을 진행하였습니다.<br>
        작업을 진행하면서 코딩에 대한 욕심이 생겨 개발자로 이직을 준비하게 되었고<br>
        Laravel 프레임워크 기반의 풀스택 개발 경험을 쌓았습니다.
    </p>
    <div class="about__majors">
        <div class="major">
            <div class="major__icon">
                <i class="fas fa-palette"></i>
            </div>
            <h3 class="major__title">design</h3>
            <div class="major__description">Photoshop, Illustrator</div>
        </div>
        <div class="major">
            <div class="major__icon">
                <i class="fab fa-html5"></i>
            </div>
            <h3 class="major__title">Front-end</h3>
            <div class="major__description">HTML, CSS, JavaScript, Bootstrap</div>
        </div>
        <div class="major">
            <div class="major__icon">
                <i class="fas fa-cogs"></i>
            </div>
            <h3 class="major__title">Back-end</h3>
            <div class="major__description">Laravel, PHP, MySQL</div>
        </div>
        <div class="major">
            <div class="major__icon">
                <i class="fas fa-mobile-alt"></i>
            </div>
            <h3 class="major__title">Mobile</h3>
            <div class="major__description">Flutter</div>
        </div>
    </div>
    <div class="about__jobs">
        <div class="job">
            <img src="/image/jobs/golfpay_logo.png" alt="골프페이" class="job__logo"/>
            <div class="jop__description">
                <p class="job__name">골프페이(써드아이즈)에서 풀스택 개발 업무를 진행하였습니다.</p>
                <p class="job__period">2020년 12월 ~ 2021년 10월</p>
            </div>
        </div>
        <div class="job">
            <img src="/image/jobs/dain_logo.png" alt="다인리더스" class="job__logo"/>
            <div class="jop__description">
                <p class="job__name">다인리더스에서 웹 디자인 업무를 진행하였습니다.</p>
                <p class="job__period">2017년 11월 ~ 2018년 11월</p>
            </div>
        </div>
    </div>
</section>
{{--  Skills  --}}
<section id="skills" class="section">
    <h1>Skills</h1>
    <h2>Sills & Attributes</h2>
    <p>
        전체적인 소프트웨어 라이프 사이클에 대한 경험이 있고 호기심이 많아 깊이 파고드는 것을 잘 합니다.<br>숫기가 없어 달변가라 할 수는 없지만 커뮤니케이션을 중요하게 생각하며 팀 분위기에 잘 녹아드는
        편입니다.
    </p>
    <div class="skillset">
        <div class="skillset__left">
            <h3 class="skillset__title">Skills</h3>
            <div class="skill">
                <div class="skill_description">
                    <span>HTML</span>
                    <span>80%</span>
                </div>
                <div class="skill__bar">
                    <div class="skill__value"></div>
                </div>
            </div>
            <div class="skill">
                <div class="skill_description">
                    <span>CSS</span>
                    <span>80%</span>
                </div>
                <div class="skill__bar">
                    <div class="skill__value"></div>
                </div>
            </div>
            <div class="skill">
                <div class="skill_description">
                    <span>JavaScript</span>
                    <span>60%</span>
                </div>
                <div class="skill__bar">
                    <div class="skill__value"></div>
                </div>
            </div>
            <div class="skill">
                <div class="skill_description">
                    <span>PHP</span>
                    <span>70%</span>
                </div>
                <div class="skill__bar">
                    <div class="skill__value"></div>
                </div>
            </div>
            <div class="skill">
                <div class="skill_description">
                    <span>MySQL</span>
                    <span>70%</span>
                </div>
                <div class="skill__bar">
                    <div class="skill__value"></div>
                </div>
            </div>
        </div>
        <div class="skillset_right">
            <div class="tools">
                <h3 class="skillset_title">Tools</h3>
                <ul class="tools__list">
                    <li><span>IntelliJ</span></li>
                    <li><span>HeidiSQL</span></li>
                    <li><span>Workbench MySQL</span></li>
                </ul>
            </div>
            <div class="etc">
                <h3 class="skillset_title">Etc</h3>
                <ul class="etc__list">
                    <li><span>Github</span></li>
                    <li><span>Notion</span></li>
                    <li><span>Slack</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
{{--  Work  --}}
{{--    <section id="work">--}}
{{--        <h1>My work</h1>--}}
{{--        <h3>Projects</h3>--}}
{{--        <div class="work_categories">--}}
{{--            <button class="category__btn">All<span class="category__count">8</span></button>--}}
{{--            <button class="category__btn">Web Design<span class="category__count">7</span></button>--}}
{{--            <button class="category__btn">Mobile Design<span class="category__count">1</span></button>--}}
{{--        </div>--}}
{{--        <div class="work__projects">--}}
{{--            <a href="" class="project" target="blank">--}}
{{--                <img src="/image/projects/01_web_design.png" alt="CareerView 메인 페이지, 제안서 디자인" class="project__img">--}}
{{--                <div class="project__description">--}}
{{--                    <h3>CareerView</h3>--}}
{{--                    <span>CareerView 의 메인 페이지, 제안서를 작업하였습니다.</span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="work__projects">--}}
{{--            <a href="" class="project" target="blank">--}}
{{--                <img src="/image/projects/02_web_design.png" alt="강릉원주대학교 핵심 역량 진단 시스템 로그인, 메인, 서브 페이지 디자인" class="project__img">--}}
{{--                <div class="project__description">--}}
{{--                    <h3>강릉원주대학교 핵심 역량 진단 시스템</h3>--}}
{{--                    <span>강릉원주대학교 핵심 역량 진단 시스템의 로그인, 메인, 서브 페이지를 작업하였습니다.</span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>        <div class="work__projects">--}}
{{--            <a href="" class="project" target="blank">--}}
{{--                <img src="/image/projects/03_web_design.jpg" alt="국민대학교 K-Star Track 로그인, 메인, 서브 페이지 디자인" class="project__img">--}}
{{--                <div class="project__description">--}}
{{--                    <h3>국민대학교 K-Star Track</h3>--}}
{{--                    <span>국민대학교 K-Star Track 의 로그인, 메인, 서브 페이지를 작업하였습니다.</span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>        <div class="work__projects">--}}
{{--            <a href="" class="project" target="blank">--}}
{{--                <img src="/image/projects/04_web_design.png" alt="군산대학교 통합 관리 서비스 로그인, 메인, 서브 페이지 디자인" class="project__img">--}}
{{--                <div class="project__description">--}}
{{--                    <h3>군산대학교 통합 관리 서비스</h3>--}}
{{--                    <span>군산대학교 통합 관리 서비스의 로그인, 메인, 서브 페이지를 작업하였습니다.</span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>        <div class="work__projects">--}}
{{--            <a href="" class="project" target="blank">--}}
{{--                <img src="/image/projects/05_web_design.png" alt="삼육대학교 교육혁신단 로그인, 메인, 서브 페이지 디자인" class="project__img">--}}
{{--                <div class="project__description">--}}
{{--                    <h3>삼육대학교 교육혁신단</h3>--}}
{{--                    <span>삼육대학교 교육혁신단의 로그인, 메인, 서브 페이지를 작업하였습니다.</span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>        <div class="work__projects">--}}
{{--            <a href="" class="project" target="blank">--}}
{{--                <img src="/image/projects/06_web_design.png" alt="다인리더스 서브 페이지 디자인" class="project__img">--}}
{{--                <div class="project__description">--}}
{{--                    <h3>다인리더스</h3>--}}
{{--                    <span>다인리더스의 서브 페이지를 작업하였습니다.</span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>        <div class="work__projects">--}}
{{--            <a href="" class="project" target="blank">--}}
{{--                <img src="/image/projects/07_web_design.png" alt="인키움 컨텐츠 디자인" class="project__img">--}}
{{--                <div class="project__description">--}}
{{--                    <h3>인키움</h3>--}}
{{--                    <span>인키움 측에 전달할 제안서의 컨텐츠를 작업하였습니다.</span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>        <div class="work__projects">--}}
{{--            <a href="" class="project" target="blank">--}}
{{--                <img src="/image/projects/01_mobile_design.jpg" alt="원광디지털대학교 로그인, 메인, 서브 페이지 디자인" class="project__img">--}}
{{--                <div class="project__description">--}}
{{--                    <h3>원광디지털대학교</h3>--}}
{{--                    <span>원광디지털대학교의 로그인, 메인, 서브 페이지를 작업하였습니다.</span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--  Contact  --}}
<section id="contact" class="section">
    <h1 class="contact__title">Let's talk</h1>
    <h2 class="contact__email">5rakun@naver.com</h2>
    <div class="contact__links">
        <a href="https://github.com/ohmyo" target="_blank">
            <i class="fab fa-github"></i>
        </a>
    </div>
    <p class="contact__rights">2021 Ohmyo - All rights reserved </p>
</section>
</body>
</html>
