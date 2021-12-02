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
    <div class="section__container">
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
    </div>
</section>
{{--  Skills  --}}
<section id="skills" class="section">
    <div class="section__container">
    <h1>Skills</h1>
    <h2>Sills & Attributes</h2>
    <p>
        전체적인 소프트웨어 라이프 사이클에 대한 경험이 있고 호기심이 많아 깊이 파고드는 것을 잘 합니다.<br>숫기가 없어 달변가라 할 수는 없지만 커뮤니케이션을 중요하게 생각하며 팀 분위기에 잘 녹아드는
        편입니다.
    </p>
    <div class="skill_set">
        <div class="skill_set__left">
            <h3 class="skill_set__title">Skills</h3>
            <div class="skill">
                <div class="skill__description">
                    <span>HTML</span>
                    <span>80%</span>
                </div>
                <div class="skill__bar">
                    <div class="skill__value" style="width: 80%;"></div>
                </div>
            </div>
            <div class="skill">
                <div class="skill__description">
                    <span>CSS</span>
                    <span>80%</span>
                </div>
                <div class="skill__bar">
                    <div class="skill__value" style="width: 80%;"></div>
                </div>
            </div>
            <div class="skill">
                <div class="skill__description">
                    <span>JavaScript</span>
                    <span>60%</span>
                </div>
                <div class="skill__bar">
                    <div class="skill__value" style="width: 60%;"></div>
                </div>
            </div>
            <div class="skill">
                <div class="skill__description">
                    <span>PHP</span>
                    <span>70%</span>
                </div>
                <div class="skill__bar">
                    <div class="skill__value" style="width: 70%;"></div>
                </div>
            </div>
            <div class="skill">
                <div class="skill__description">
                    <span>MySQL</span>
                    <span>70%</span>
                </div>
                <div class="skill__bar">
                    <div class="skill__value" style="width: 70%;"></div>
                </div>
            </div>
        </div>
        <div class="skill_set__right">
            <div class="tools">
                <h3 class="skill_set__title">Tools</h3>
                <ul class="tools__list">
                    <li><span>IntelliJ</span></li>
                    <li><span>HeidiSQL</span></li>
                    <li><span>Workbench MySQL</span></li>
                </ul>
            </div>
            <div class="etc">
                <h3 class="skill_set__title">Etc</h3>
                <ul class="etc__list">
                    <li><span>Github</span></li>
                    <li><span>Notion</span></li>
                    <li><span>Slack</span></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</section>
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
