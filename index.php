<?php

?>

<!doctype html>
<html lang='en'>

<head>

    <title>Disc PHP</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- #region link to Style -->
    <link href='./assets/css/style.css' rel='stylesheet'>
    <!-- #endregion link to Style -->
    <!-- #region link to Bootstrap -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <!-- #endregion link to Bootstrap -->

</head>

<body class='debug'>

    <header>
        <div class="container-fluid pt-2">
            <div class="d-flex justify-content-start">
                <img src="./assets/img/logo.svg" alt="">
            </div>
        </div>
    </header>

    <div id='app'>
        <div class="container">
            <div class="row">
                <div class="col-4 g-4" v-for="disc in discs">
                    <div class="card text-center py-3 px-5 bg-secondary h-100 text-white" @click="changeShowModal()">
                        <img class="card-img-top" :src="disc.poster" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">{{disc.title}}</h4>
                            <p class="card-text">{{disc.author}}</p>
                            <h4 class="card-title">{{disc.year}}</h4>
                        </div>
                    </div>
                    <div v-if="showModal">
                        <div class="modal-overlay">
                            <div class="modal df">
                                <div class="modal_image">
                                    <img class="check" :src="disc.poster" alt="" />
                                </div>
                                <div class="modal_info">
                                    <h6>
                                        <strong>
                                            {{disc.title}}
                                        </strong>
                                    </h6>
                                    <p>by</p>
                                    <p>{{disc.author}}</p>
                                    <p>{{disc.year}}</p>
                                </div>
                            </div>
                            <div class="close" @click="changeShowModal()">
                                <button>X</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- #region Dev-only cdns, disable in production -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js' integrity='sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
    <!-- #region link to Vue-script -->
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <!-- #endregion link to Vue-script -->
    <!-- #region link to Script -->
    <script src='./assets/js/script.js'></script>
    <!-- #endregion link to Script -->
    <!-- #endregion Dev-only cdns, disable in production -->

</body>

</html>