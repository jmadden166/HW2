<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style>
        h1 {
            text-align: center;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Current Drivers</li>
        </ol>
    </nav>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php?string=Home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Current Drivers</li>
        </ol>
    </nav>
    <h1>Current Drivers</h1>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 10"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="10" aria-label="Slide 11"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="11" aria-label="Slide 12"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="12" aria-label="Slide 13"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="13" aria-label="Slide 14"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="14" aria-label="Slide 15"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="15" aria-label="Slide 16"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="16" aria-label="Slide 17"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="17" aria-label="Slide 18"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="18" aria-label="Slide 19"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="19" aria-label="Slide 20"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.formula1.com/content/fom-website/en/drivers/max-verstappen/_jcr_content/image.img.640.medium.jpg/1646819045507.jpg" class="d-block w-100" alt="Max">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Max Verstappen</h5>
                    <p>Red Bull Racing</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.formula1.com/content/fom-website/en/drivers/sergio-perez/_jcr_content/image.img.640.medium.jpg/1646819228700.jpg" class="d-block w-100" alt="Max Verstappen">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Sergio Perez</h5>
                    <p>Red Bull Racing</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.news18.com/ibnlive/uploads/2022/07/charles-leclerc-1-16572578414x3.jpg" class="d-block w-100" alt="Checo">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Charles Leclerc</h5>
                    <p>Ferrari</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/race-winner-carlos-sainz-of-spain-and-ferrari-celebrates-in-news-photo-1656866507.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Carlos Sainz</h5>
                    <p>Ferrari</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.formula1.com/content/fom-website/en/drivers/george-russell/_jcr_content/image.img.320.medium.jpg/1646750994602.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>George Russell</h5>
                    <p>Mercedes</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.formula1.com/content/fom-website/en/drivers/lewis-hamilton/_jcr_content/image.img.320.medium.jpg/1647334259839.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Lewis Hamilton</h5>
                    <p>Mercedes</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.formula1.com/content/fom-website/en/drivers/lando-norris/_jcr_content/image.img.320.medium.jpg/1646819013197.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Lando Norris</h5>
                    <p>McLaren</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://i.dailymail.co.uk/1s/2022/08/29/01/61816127-11155209-Daniel_Ricciardo_was_not_his_usual_effervescent_and_happy_self_a-a-3_1661731927899.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Dnaiel Riccardo</h5>
                    <p>McLaren</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.racefans.net/wp-content/uploads/2021/08/racefansdotnet-21-08-01-16-53-03-16.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Esteban Ocon</h5>
                    <p>Alpine</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://library.sportingnews.com/styles/crop_style_16_9_mobile_2x/s3/2022-06/sporting-news-2022-photo-with-watermark-f6b841ca-cadb-4c9e-9247-3d50d7fe9cad.png?itok=XYwz2w9i" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Fernando Alonso</h5>
                    <p>Alpine</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.formula1.com/content/fom-website/en/drivers/valtteri-bottas/_jcr_content/image.img.320.medium.jpg/1646819266274.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Valtteri Bottas</h5>
                    <p>Alfa Romeo</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.formula1.com/content/fom-website/en/drivers/guanyu-zhou/_jcr_content/image.img.640.medium.jpg/1646818979975.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Zhou Guanyu</h5>
                    <p>Alfa Romeo</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://i.guim.co.uk/img/media/becce0813889390d0208f52607ef8c6b285ba40a/0_194_3066_1840/master/3066.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=7fe042e8eb142acda8aac85dc8418a95" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Pierre Gasly</h5>
                    <p>AlphaTauri</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn.motorsportmagazine.com/wp-content/uploads/2021/02/19084632/Tsunoda2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Yuki Tsunoda</h5>
                    <p>AlphaTauri</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.formula1.com/content/fom-website/en/drivers/sebastian-vettel/_jcr_content/image.img.640.medium.jpg/1646818813887.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Sebastian Vettel</h5>
                    <p>Aston Martin</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn-7.motorsport.com/images/mgl/0RrnLBB0/s800/lance-stroll-aston-martin-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Lance Stroll</h5>
                    <p>Aston Martin</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn-1.motorsport.com/images/amp/YEQoEA1Y/s1000/kevin-magnussen-haas-f1-team-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Kevin Magnussen</h5>
                    <p>Haas F1 Team</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.formula1.com/content/fom-website/en/drivers/mick-schumacher/_jcr_content/image16x9.img.1536.high.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Mick Schumacher</h5>
                    <p>Haas F1 Team</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://e0.365dm.com/22/08/2048x1152/skysports-williams-driver-alex-albon_5853700.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Alex Albon</h5>
                    <p>Williams</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.grandprix.com.au/uploads/images/_driverProfile/FOR-FANZONE-DRIVER-PROFILES-GP22-Latifi-Detail.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Nicholas Latifi</h5>
                    <p>Williams</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
