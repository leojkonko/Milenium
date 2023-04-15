<main id="home">
    <section class="banner position-relative">
        <div class="row">
            <div class="col-12 p-0">
                <div class="bg-index">
                    <div class="ratio ratio-21x9 text-center d-none d-lg-flex z-index-background">
                            <img class="object-fit-cover w-100 h-100" src="<?= asset('images/backgrounds/bannerr.png') ?>" alt="">
                    </div>
                    <div class="ratio ratio-6x9 text-center d-flex d-lg-none z-index-background">
                            <img class="object-fit-cover w-100 h-100" src="<?= asset('images/backgrounds/bannerr.png') ?>" alt="">
                    </div>
                    <div class="conteudo-banner flex-column w-100 p-lg-4 p-2">
                        <h2 class="text-white h2 h2-50 text-center">Segurança e agilidade na entrega da sua carga</h2>
                        <p class="text-white text-center p">Acompanhe sua carga.</p>
                        <div class="d-flex justify-content-center gap-1 pt-1">
                            <button class="btn btn-outline-light p">Consulta simples</button>
                            <button class="btn btn-outline-light p">Consulta completa</button>
                            <button class="btn btn-outline-light p d-none d-md-flex">Consulta simples</button>
                            <button class="btn btn-outline-light p d-none d-lg-flex">Consulta completa</button>
                            <button class="btn btn-outline-light p d-none d-lg-flex">Consulta completa</button>
                        </div>
                        <div class="d-flex justify-content-center gap-1 pt-1 d-none d-md-flex d-lg-none">
                            <button class="btn btn-outline-light p">Consulta simples</button>
                            <button class="btn btn-outline-light p">Consulta completa</button>
                        </div>
                        <div class="d-flex justify-content-center gap-1 pt-1 d-flex d-md-none">
                            <button class="btn btn-outline-light p">Consulta simples</button>
                            <button class="btn btn-outline-light p">Consulta completa</button>
                        </div>
                        <div class="d-flex justify-content-center gap-1 pt-1 d-flex d-md-none mb-2">
                            <button class="btn btn-outline-light p">Consulta simples</button>
                            <button class="btn btn-outline-light p">Consulta completa</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="cidades" class="cidades py-4">
        <div class="container">
        <div class="row">
            <!-- <div class="col-lg-8 col-12 bg-cinza d-flex justify-content-center align-items-center p-xl-4 p-lg-1 p-2 flex-column">
                <img src="https://www.trdtransportes.com/images/mapa_index_6.png" width="50%" alt="">
               <div class="row d-flex justify-content-center infos my-lg-4 my-1">    
                    <h2 class="h2 h2-50 text-primary text-lg-start text-center">Área de atuação</h2>
                    <select name="" id="" class="form-select p mt-2 mb-1">
                        <option value="" >Selecione uma cidade aqui ou clicando no mapa</option>
                        <option value="">opção 1</option>
                        <option value="">opção 2</option>
                    </select>
                    <div class="col-lg-5 col-md-6 col-12 p-0 imagem">
                        <img class="w-100 h-100 object-fit-cover" src="<?= asset('images/banners/caminhao.png') ?>" alt="">
                    </div>
                    <div class="col-lg-7 col-md-6 col-12 p-0 bg-light infos px-lg-1 px-2 py-1 d-flex justify-content-center align-items-center flex-column">
                        <div class="m-auto">
                            <h2 class="h2 h2-20 text-lg-start ps-lg-0-50 ps-0 mb-1 mt-1 w-100">Matriz - Caxias do Sul</h2>
                            <p class="p p-16 text-lg-start w-100">
                                <svg class="ms-0-50 me-0-50" width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.77252 3.82L8.2916 6.976C8.7313 7.288 9.28092 7.288 9.72061 6.976L14.2397 3.82M1 2.452V11.548C1 12.352 1.57405 13 2.29466 13H15.7053C16.4137 13 17 12.352 17 11.548V2.452C17 1.648 16.426 1 15.7053 1H2.29466C1.57405 1 1 1.648 1 2.452Z" stroke="#FF0000" stroke-width="1.5" stroke-miterlimit="10"/>
                                </svg>
                                cx@mileniumtransp.com.br
                            </p>
                            <p class="p p-16 text-lg-start w-100">
                                <svg class="ms-0-50 me-0-50" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.1736 9.97102C14.7929 9.7916 12.8622 8.89446 12.5087 8.7663C12.128 8.63814 11.8832 8.56124 11.6113 8.94573C11.3394 9.30458 10.6052 10.1505 10.3604 10.4068C10.1429 10.6375 9.89816 10.6887 9.51746 10.4837C9.10957 10.3042 7.8587 9.91976 6.33591 8.63814C5.16662 7.6641 4.37803 6.43374 4.1333 6.07489C3.91576 5.6904 4.1061 5.51098 4.29645 5.30592C4.4868 5.15212 4.67715 4.87017 4.89469 4.66511C5.08504 4.46005 5.16662 4.30625 5.30259 4.04993C5.43855 3.81924 5.38416 3.58854 5.27539 3.40912C5.19381 3.22969 4.40522 1.38415 4.07891 0.640811C3.7526 -0.0768974 3.42629 0.0256325 3.18155 0C2.96401 0 2.69208 0 2.42015 0C2.17542 0 1.74034 0.10253 1.38683 0.461384C1.00613 0.845871 0 1.74301 0 3.56291C0 5.38281 1.41402 7.15145 1.60437 7.40778C1.79472 7.6641 4.37803 11.4064 8.32098 13.0213C9.27273 13.4058 10.0069 13.6365 10.578 13.7903C11.5297 14.0722 12.3727 14.021 13.0525 13.9184C13.8139 13.8159 15.3911 13.0213 15.7174 12.1498C16.0437 11.3039 16.0437 10.5606 15.9349 10.4068C15.8534 10.253 15.5814 10.1505 15.1736 9.97102Z" fill="#FF0000"/>
                                </svg>
                                (54) 3224-2304   <br>                         
                                <span class="ps-2">(54) 3224-4645</span>
                            </p>
                            <p class="p p-16 text-lg-start w-100">
                                <svg class="ms-0-50 me-0-50" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.6695 2.32533C12.165 0.826667 10.1647 0.000666667 8.03383 0C3.64279 0 0.0689973 3.556 0.0669877 7.928C0.0663178 9.32533 0.43341 10.6893 1.13075 11.892L0 16L4.2229 14.8973C5.38648 15.5293 6.69675 15.862 8.02981 15.8627H8.03316C12.4235 15.8627 15.998 12.306 16 7.934C16.0013 5.816 15.1734 3.82333 13.6695 2.32533ZM8.03383 14.5233H8.03115C6.84279 14.5233 5.67787 14.2053 4.661 13.6047L4.41917 13.462L1.91317 14.116L2.58237 11.684L2.42495 11.4347C1.76178 10.3853 1.4121 9.17267 1.41277 7.928C1.41411 4.29467 4.38501 1.33867 8.03718 1.33867C9.80565 1.33867 11.4683 2.02533 12.7183 3.27067C13.9683 4.51667 14.6562 6.172 14.6556 7.93267C14.6535 11.5673 11.6833 14.5233 8.03383 14.5233ZM11.6659 9.588C11.4669 9.48867 10.4883 9.00933 10.3054 8.94333C10.1232 8.87733 9.99054 8.844 9.85723 9.042C9.72393 9.24 9.34344 9.68667 9.22688 9.81933C9.11099 9.95133 8.99443 9.968 8.79548 9.86867C8.59653 9.76933 7.95478 9.56067 7.19447 8.88533C6.60297 8.36 6.20306 7.71133 6.08717 7.51267C5.97128 7.314 6.07511 7.20733 6.17425 7.10867C6.26401 7.02 6.3732 6.87733 6.47302 6.76133C6.5735 6.64667 6.60632 6.564 6.67331 6.43133C6.73963 6.29933 6.7068 6.18333 6.65656 6.084C6.60632 5.98533 6.20841 5.01 6.04295 4.61333C5.88152 4.22667 5.7174 4.27933 5.59481 4.27333C5.47892 4.26733 5.34628 4.26667 5.21298 4.26667C5.08034 4.26667 4.86464 4.316 4.68244 4.51467C4.50023 4.71333 3.98576 5.19267 3.98576 6.16733C3.98576 7.14267 4.69918 8.08467 4.79833 8.21667C4.89747 8.34867 6.20172 10.35 8.19862 11.208C8.67356 11.412 9.04467 11.534 9.33339 11.6253C9.81034 11.776 10.2444 11.7547 10.5874 11.704C10.9699 11.6473 11.765 11.2247 11.9312 10.762C12.0973 10.2993 12.0973 9.902 12.0471 9.82C11.9975 9.73667 11.8649 9.68733 11.6659 9.588Z" fill="#FF0000"/>
                                </svg>
                                55*47863*3
                            </p>
                        </div>
                    </div>
                </div>-->
            <div class="col-lg-12 w-100 col-12 bg-dange d-flex align-items-center justify-content-center">
                
                <div class="accordion w-100" id="accordionExample">
                <h2 class="h2 h2-50 text-primary w-100 py-2">Áreas de <span class="h2 h2-50 text-danger">Atuação</span></h2>
                <?php 
                $show = "show";
                ?>
                <?php foreach(range(0,2) as $i) : ?>
                <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?=$i?>" aria-expanded="true" aria-controls="collapseOne<?=$i?>">
                            Rio Grande do Sul <?=$i?>
                        </button>
                        </h2>
                        <?php foreach(range(0,1) as $j) : ?>
                        <div id="collapseOne<?=$i?>" class="accordion-collapse collapse <?=$show?> overflow-hidden" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-cinza row px-lg-2 px-1 pt-3">
                                
                            <div class="ps-lg-2 col-lg-3 col-xl-3 col-xxl-3 col-md-6 col-12 p-0 imagem">
                                <img class="w-100 h-100 object-fit-cover" src="<?= asset('images/banners/caminhao.png') ?>" alt="">
                            </div>
                            <div class="col-lg-4 col-xl-4 col-xxl-3 col-md-6 col-12 p-0 bg-white infos px-lg-1 px-lg-1 px-xl-1 px-1 py-1 d-flex justify-content-center align-items-center flex-column">
                                <div class="m-auto">
                                    <h2 class="h2 h2-20 text-lg-start ps-lg-0-50 ps-0 mb-1 mt-1 w-100">Matriz - Caxias do Sul</h2>
                                    <p class="p p-16 text-lg-start w-100">
                                        <svg class="ms-0-50 me-0-50" width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.77252 3.82L8.2916 6.976C8.7313 7.288 9.28092 7.288 9.72061 6.976L14.2397 3.82M1 2.452V11.548C1 12.352 1.57405 13 2.29466 13H15.7053C16.4137 13 17 12.352 17 11.548V2.452C17 1.648 16.426 1 15.7053 1H2.29466C1.57405 1 1 1.648 1 2.452Z" stroke="#FF0000" stroke-width="1.5" stroke-miterlimit="10"/>
                                        </svg>
                                        cx@mileniumtransp.com.br
                                    </p>
                                    <p class="p p-16 text-lg-start w-100">
                                        <svg class="ms-0-50 me-0-50" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.1736 9.97102C14.7929 9.7916 12.8622 8.89446 12.5087 8.7663C12.128 8.63814 11.8832 8.56124 11.6113 8.94573C11.3394 9.30458 10.6052 10.1505 10.3604 10.4068C10.1429 10.6375 9.89816 10.6887 9.51746 10.4837C9.10957 10.3042 7.8587 9.91976 6.33591 8.63814C5.16662 7.6641 4.37803 6.43374 4.1333 6.07489C3.91576 5.6904 4.1061 5.51098 4.29645 5.30592C4.4868 5.15212 4.67715 4.87017 4.89469 4.66511C5.08504 4.46005 5.16662 4.30625 5.30259 4.04993C5.43855 3.81924 5.38416 3.58854 5.27539 3.40912C5.19381 3.22969 4.40522 1.38415 4.07891 0.640811C3.7526 -0.0768974 3.42629 0.0256325 3.18155 0C2.96401 0 2.69208 0 2.42015 0C2.17542 0 1.74034 0.10253 1.38683 0.461384C1.00613 0.845871 0 1.74301 0 3.56291C0 5.38281 1.41402 7.15145 1.60437 7.40778C1.79472 7.6641 4.37803 11.4064 8.32098 13.0213C9.27273 13.4058 10.0069 13.6365 10.578 13.7903C11.5297 14.0722 12.3727 14.021 13.0525 13.9184C13.8139 13.8159 15.3911 13.0213 15.7174 12.1498C16.0437 11.3039 16.0437 10.5606 15.9349 10.4068C15.8534 10.253 15.5814 10.1505 15.1736 9.97102Z" fill="#FF0000"/>
                                        </svg>
                                        (54) 3224-2304   <br>                         
                                        <span class="ps-2">(54) 3224-4645</span>
                                    </p>
                                    <p class="p p-16 text-lg-start w-100">
                                        <svg class="ms-0-50 me-0-50" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.6695 2.32533C12.165 0.826667 10.1647 0.000666667 8.03383 0C3.64279 0 0.0689973 3.556 0.0669877 7.928C0.0663178 9.32533 0.43341 10.6893 1.13075 11.892L0 16L4.2229 14.8973C5.38648 15.5293 6.69675 15.862 8.02981 15.8627H8.03316C12.4235 15.8627 15.998 12.306 16 7.934C16.0013 5.816 15.1734 3.82333 13.6695 2.32533ZM8.03383 14.5233H8.03115C6.84279 14.5233 5.67787 14.2053 4.661 13.6047L4.41917 13.462L1.91317 14.116L2.58237 11.684L2.42495 11.4347C1.76178 10.3853 1.4121 9.17267 1.41277 7.928C1.41411 4.29467 4.38501 1.33867 8.03718 1.33867C9.80565 1.33867 11.4683 2.02533 12.7183 3.27067C13.9683 4.51667 14.6562 6.172 14.6556 7.93267C14.6535 11.5673 11.6833 14.5233 8.03383 14.5233ZM11.6659 9.588C11.4669 9.48867 10.4883 9.00933 10.3054 8.94333C10.1232 8.87733 9.99054 8.844 9.85723 9.042C9.72393 9.24 9.34344 9.68667 9.22688 9.81933C9.11099 9.95133 8.99443 9.968 8.79548 9.86867C8.59653 9.76933 7.95478 9.56067 7.19447 8.88533C6.60297 8.36 6.20306 7.71133 6.08717 7.51267C5.97128 7.314 6.07511 7.20733 6.17425 7.10867C6.26401 7.02 6.3732 6.87733 6.47302 6.76133C6.5735 6.64667 6.60632 6.564 6.67331 6.43133C6.73963 6.29933 6.7068 6.18333 6.65656 6.084C6.60632 5.98533 6.20841 5.01 6.04295 4.61333C5.88152 4.22667 5.7174 4.27933 5.59481 4.27333C5.47892 4.26733 5.34628 4.26667 5.21298 4.26667C5.08034 4.26667 4.86464 4.316 4.68244 4.51467C4.50023 4.71333 3.98576 5.19267 3.98576 6.16733C3.98576 7.14267 4.69918 8.08467 4.79833 8.21667C4.89747 8.34867 6.20172 10.35 8.19862 11.208C8.67356 11.412 9.04467 11.534 9.33339 11.6253C9.81034 11.776 10.2444 11.7547 10.5874 11.704C10.9699 11.6473 11.765 11.2247 11.9312 10.762C12.0973 10.2993 12.0973 9.902 12.0471 9.82C11.9975 9.73667 11.8649 9.68733 11.6659 9.588Z" fill="#FF0000"/>
                                        </svg>
                                        55*47863*3
                                    </p>
                                </div>
                            </div>
                                <div class="col-lg-5 col-xl-5 col-xxl-6 flex-column p-lg-3 p-2">
                                    <h2 class="h2-25 text-primary">Cidades atendidas por Caxias do Sul:</h2>
                                    <div class="d-flex h-100 w-100 d-flex justify-content-between align-items-center">
                                        <ul class="list-unstyled">
                                            <?php foreach(range(0,6) as $k) : ?>
                                            <li class="p p-16">
                                            <img width="15px" class="me-md-0-50 me-0" src="<?= asset('images/icones/proximo.png') ?>" alt="">    
                                            Cidade 1<?=$k?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                        <ul class="list-unstyled">
                                            <?php foreach(range(0,6) as $k) : ?>
                                            <li class="p p-16">
                                            <img width="15px" class="me-md-0-50 me-0" src="<?= asset('images/icones/proximo.png') ?>" alt="">    
                                            Cidade 1<?=$k?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                        <ul class="list-unstyled d-none d-sm-block d-lg-none d-xl-block">
                                            <?php foreach(range(0,6) as $k) : ?>
                                            <li class="p p-16">
                                            <img width="15px" class="me-md-0-50 me-0" src="<?= asset('images/icones/proximo.png') ?>" alt="">    
                                            Cidade 1<?=$k?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    
                                </div>
                                <div class="linha mt-4 "></div>
                           </div>
                        </div>
                        <?php endforeach; ?>       
                        <?php
                            $show = $show . "not-show";
                            ?>                
                    </div>   
                    <?php endforeach; ?>       
                    <div class="w-100 text-center">
                        <button class="btn btn-primary p mt-2">
                            <svg width="30px" class="me-1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 56 56" style="enable-background:new 0 0 56 56" xml:space="preserve"><g><path style="fill:#e9e9e0" d="M36.985,0H7.963C7.155,0,6.5,0.655,6.5,1.926V55c0,0.345,0.655,1,1.463,1h40.074 c0.808,0,1.463-0.655,1.463-1V12.978c0-0.696-0.093-0.92-0.257-1.085L37.607,0.257C37.442,0.093,37.218,0,36.985,0z"/><polygon style="fill:#d9d7ca" points="37.5,0.151 37.5,12 49.349,12"/><path style="fill:#cc4b4c" d="M19.514,33.324L19.514,33.324c-0.348,0-0.682-0.113-0.967-0.326 c-1.041-0.781-1.181-1.65-1.115-2.242c0.182-1.628,2.195-3.332,5.985-5.068c1.504-3.296,2.935-7.357,3.788-10.75 c-0.998-2.172-1.968-4.99-1.261-6.643c0.248-0.579,0.557-1.023,1.134-1.215c0.228-0.076,0.804-0.172,1.016-0.172 c0.504,0,0.947,0.649,1.261,1.049c0.295,0.376,0.964,1.173-0.373,6.802c1.348,2.784,3.258,5.62,5.088,7.562 c1.311-0.237,2.439-0.358,3.358-0.358c1.566,0,2.515,0.365,2.902,1.117c0.32,0.622,0.189,1.349-0.39,2.16 c-0.557,0.779-1.325,1.191-2.22,1.191c-1.216,0-2.632-0.768-4.211-2.285c-2.837,0.593-6.15,1.651-8.828,2.822 c-0.836,1.774-1.637,3.203-2.383,4.251C21.273,32.654,20.389,33.324,19.514,33.324z M22.176,28.198 c-2.137,1.201-3.008,2.188-3.071,2.744c-0.01,0.092-0.037,0.334,0.431,0.692C19.685,31.587,20.555,31.19,22.176,28.198z M35.813,23.756c0.815,0.627,1.014,0.944,1.547,0.944c0.234,0,0.901-0.01,1.21-0.441c0.149-0.209,0.207-0.343,0.23-0.415 c-0.123-0.065-0.286-0.197-1.175-0.197C37.12,23.648,36.485,23.67,35.813,23.756z M28.343,17.174 c-0.715,2.474-1.659,5.145-2.674,7.564c2.09-0.811,4.362-1.519,6.496-2.02C30.815,21.15,29.466,19.192,28.343,17.174z M27.736,8.712c-0.098,0.033-1.33,1.757,0.096,3.216C28.781,9.813,27.779,8.698,27.736,8.712z"/><path style="fill:#cc4b4c" d="M48.037,56H7.963C7.155,56,6.5,55.345,6.5,54.537V39h43v15.537C49.5,55.345,48.845,56,48.037,56z"/><g><path style="fill:#fff" d="M17.385,53h-1.641V42.924h2.898c0.428,0,0.852,0.068,1.271,0.205 c0.419,0.137,0.795,0.342,1.128,0.615c0.333,0.273,0.602,0.604,0.807,0.991s0.308,0.822,0.308,1.306 c0,0.511-0.087,0.973-0.26,1.388c-0.173,0.415-0.415,0.764-0.725,1.046c-0.31,0.282-0.684,0.501-1.121,0.656 s-0.921,0.232-1.449,0.232h-1.217V53z M17.385,44.168v3.992h1.504c0.2,0,0.398-0.034,0.595-0.103 c0.196-0.068,0.376-0.18,0.54-0.335c0.164-0.155,0.296-0.371,0.396-0.649c0.1-0.278,0.15-0.622,0.15-1.032 c0-0.164-0.023-0.354-0.068-0.567c-0.046-0.214-0.139-0.419-0.28-0.615c-0.142-0.196-0.34-0.36-0.595-0.492 c-0.255-0.132-0.593-0.198-1.012-0.198H17.385z"/><path style="fill:#fff" d="M32.219,47.682c0,0.829-0.089,1.538-0.267,2.126s-0.403,1.08-0.677,1.477s-0.581,0.709-0.923,0.937 s-0.672,0.398-0.991,0.513c-0.319,0.114-0.611,0.187-0.875,0.219C28.222,52.984,28.026,53,27.898,53h-3.814V42.924h3.035 c0.848,0,1.593,0.135,2.235,0.403s1.176,0.627,1.6,1.073s0.74,0.955,0.95,1.524C32.114,46.494,32.219,47.08,32.219,47.682z M27.352,51.797c1.112,0,1.914-0.355,2.406-1.066s0.738-1.741,0.738-3.09c0-0.419-0.05-0.834-0.15-1.244 c-0.101-0.41-0.294-0.781-0.581-1.114s-0.677-0.602-1.169-0.807s-1.13-0.308-1.914-0.308h-0.957v7.629H27.352z"/><path style="fill:#fff" d="M36.266,44.168v3.172h4.211v1.121h-4.211V53h-1.668V42.924H40.9v1.244H36.266z"/></g></g></svg>    
                           Relação de praças atendidas
                        </button>   
                    </div>                   
                </div>
            </div>
        </div>
    </div>
    </section>
    <section id="empresa" class="saiba-mais bg-cinza mt-2 mt-lg-3">
        <div class="container">
            <div class="row">
                <div class="col-12 py-lg-4 py-2 d-flex justify-content-center align-items-center flex-column conteudo-texto text-lg-start text-center">
                    <h2 class="h2 h2-50 text-primary w-100">Saiba mais sobre a <span class="h2 h2-50 text-danger">Milenium</span></h2>
                    <p class="p pt-2">
                    Com visão empreendedora e focada na satisfação de seus clientes, a Milenium em seus 20 anos de atuação se especializou no transporte de cargas e encomendas. Nossas filiais de Caxias do Sul, Guarulhos, Curitiba, Bento Gonçalves e Novo Hamburgo, contam com terminal de cargas, equipe treinada e especializada para atender as necessidades dos clientes.
                    </p>
                    <p class="p">
Com política de manutenção, renovação de frota e monitoramento de veículos com rastreamento de última geração, podemos garantir maior segurança e agilidade em nossas operações. Atualmente a Milenium atende clientes dos mais diversos segmentos, conforme sua necessidade (fracionado e lotação)
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-6 p-0 bg-cinza">
                <div class="ratio ratio-1x1">
                    <a href="<?= asset('images/banners/fotos2.png') ?>" data-fancybox="gallery">
                        <img class="object-fit-cover w-100 h-100 br-inf-esq" src="<?= asset('images/banners/fotos2.png') ?>" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6 p-0">
                <div class="ratio ratio-1x1">
                    <a href="<?= asset('images/banners/fotos2.png') ?>" data-fancybox="gallery">
                        <img class="object-fit-cover w-100 h-100" src="<?= asset('images/banners/fotos2.png') ?>" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6 p-0">
                <div class="ratio ratio-1x1">
                    <a href="<?= asset('images/banners/fotos2.png') ?>" data-fancybox="gallery">
                        <img class="object-fit-cover w-100 h-100" src="<?= asset('images/banners/fotos2.png') ?>" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6 p-0">
                <div class="mais-fotos">
                    <a href="<?= asset('images/banners/fotos2.png') ?>" data-fancybox="gallery" class="veja-mais">+ 2
                        <div class="ratio ratio-1x1">
                            <a href="<?= asset('images/banners/fotos2.png') ?>" data-fancybox="gallery">
                                <img class="object-fit-cover w-100 h-100" src="<?= asset('images/banners/fotos2.png') ?>" alt="">
                            </a>
                            <a href="<?= asset('images/banners/fotos.png') ?>" data-fancybox="gallery">
                                <img class="object-fit-cover w-100 h-100" src="<?= asset('images/banners/fotos2.png') ?>" alt="">
                            </a>
                            <a href="<?= asset('images/banners/fotos1.png') ?>" data-fancybox="gallery">
                                <img class="object-fit-cover w-100 h-100" src="<?= asset('images/banners/fotos2.png') ?>" alt="">
                            </a>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="diferenciais py-lg-4 py-2">
    <div class="container">
        <h2 class="h2 text-white w-100 text-center mt-2">Diferenciais</h2>
            <div class="swiper diferenciais-swiper">
                    <div class="swiper-wrapper my-4">
                        <?php foreach(range(0,9) as $i) : ?>
                            <div class="swiper-slide d-flex justify-content-center flex-column">
                                <div class="ratio ratio-1x1 m-auto">
                                    <img class="" src="<?= asset('images/icones/diferenciais.png') ?>" alt="">
                                </div>
                                <p class="p text-white text-center pt-1">
                                    Estoque vertical
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <div class="swiper-pagination mb-2"></div> 
            </div>
        </div>
    </section>
    <!--<section id="cidades" class="cidades py-4">
        <div class="row">
            <div class="col-lg-6 col-12 bg-cinza d-flex justify-content-center align-items-center p-xl-4 p-lg-1 p-2 flex-column">
                <div class="row d-flex justify-content-center infos my-lg-4 my-1">    
                    <h2 class="h2 h2-50 text-primary text-lg-start text-center">Área de atuação</h2>
                    <select name="" id="" class="form-select p mt-2 mb-1">
                        <option value="" >Selecione uma cidade aqui ou clicando no mapa</option>
                        <option value="">opção 1</option>
                        <option value="">opção 2</option>
                    </select>
                    <div class="col-lg-5 col-md-6 col-12 p-0 imagem">
                        <img class="w-100 h-100 object-fit-cover" src="<?= asset('images/banners/caminhao.png') ?>" alt="">
                    </div>
                    <div class="col-lg-7 col-md-6 col-12 p-0 bg-light infos px-lg-1 px-2 py-1 d-flex justify-content-center align-items-center flex-column">
                        <div class="m-auto">
                            <h2 class="h2 h2-20 text-lg-start ps-lg-0-50 ps-0 mb-1 mt-1 w-100">Matriz - Caxias do Sul</h2>
                            <p class="p p-16 text-lg-start w-100">
                                <svg class="ms-0-50 me-0-50" width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.77252 3.82L8.2916 6.976C8.7313 7.288 9.28092 7.288 9.72061 6.976L14.2397 3.82M1 2.452V11.548C1 12.352 1.57405 13 2.29466 13H15.7053C16.4137 13 17 12.352 17 11.548V2.452C17 1.648 16.426 1 15.7053 1H2.29466C1.57405 1 1 1.648 1 2.452Z" stroke="#FF0000" stroke-width="1.5" stroke-miterlimit="10"/>
                                </svg>
                                cx@mileniumtransp.com.br
                            </p>
                            <p class="p p-16 text-lg-start w-100">
                                <svg class="ms-0-50 me-0-50" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.1736 9.97102C14.7929 9.7916 12.8622 8.89446 12.5087 8.7663C12.128 8.63814 11.8832 8.56124 11.6113 8.94573C11.3394 9.30458 10.6052 10.1505 10.3604 10.4068C10.1429 10.6375 9.89816 10.6887 9.51746 10.4837C9.10957 10.3042 7.8587 9.91976 6.33591 8.63814C5.16662 7.6641 4.37803 6.43374 4.1333 6.07489C3.91576 5.6904 4.1061 5.51098 4.29645 5.30592C4.4868 5.15212 4.67715 4.87017 4.89469 4.66511C5.08504 4.46005 5.16662 4.30625 5.30259 4.04993C5.43855 3.81924 5.38416 3.58854 5.27539 3.40912C5.19381 3.22969 4.40522 1.38415 4.07891 0.640811C3.7526 -0.0768974 3.42629 0.0256325 3.18155 0C2.96401 0 2.69208 0 2.42015 0C2.17542 0 1.74034 0.10253 1.38683 0.461384C1.00613 0.845871 0 1.74301 0 3.56291C0 5.38281 1.41402 7.15145 1.60437 7.40778C1.79472 7.6641 4.37803 11.4064 8.32098 13.0213C9.27273 13.4058 10.0069 13.6365 10.578 13.7903C11.5297 14.0722 12.3727 14.021 13.0525 13.9184C13.8139 13.8159 15.3911 13.0213 15.7174 12.1498C16.0437 11.3039 16.0437 10.5606 15.9349 10.4068C15.8534 10.253 15.5814 10.1505 15.1736 9.97102Z" fill="#FF0000"/>
                                </svg>
                                (54) 3224-2304   <br>                         
                                <span class="ps-2">(54) 3224-4645</span>
                            </p>
                            <p class="p p-16 text-lg-start w-100">
                                <svg class="ms-0-50 me-0-50" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.6695 2.32533C12.165 0.826667 10.1647 0.000666667 8.03383 0C3.64279 0 0.0689973 3.556 0.0669877 7.928C0.0663178 9.32533 0.43341 10.6893 1.13075 11.892L0 16L4.2229 14.8973C5.38648 15.5293 6.69675 15.862 8.02981 15.8627H8.03316C12.4235 15.8627 15.998 12.306 16 7.934C16.0013 5.816 15.1734 3.82333 13.6695 2.32533ZM8.03383 14.5233H8.03115C6.84279 14.5233 5.67787 14.2053 4.661 13.6047L4.41917 13.462L1.91317 14.116L2.58237 11.684L2.42495 11.4347C1.76178 10.3853 1.4121 9.17267 1.41277 7.928C1.41411 4.29467 4.38501 1.33867 8.03718 1.33867C9.80565 1.33867 11.4683 2.02533 12.7183 3.27067C13.9683 4.51667 14.6562 6.172 14.6556 7.93267C14.6535 11.5673 11.6833 14.5233 8.03383 14.5233ZM11.6659 9.588C11.4669 9.48867 10.4883 9.00933 10.3054 8.94333C10.1232 8.87733 9.99054 8.844 9.85723 9.042C9.72393 9.24 9.34344 9.68667 9.22688 9.81933C9.11099 9.95133 8.99443 9.968 8.79548 9.86867C8.59653 9.76933 7.95478 9.56067 7.19447 8.88533C6.60297 8.36 6.20306 7.71133 6.08717 7.51267C5.97128 7.314 6.07511 7.20733 6.17425 7.10867C6.26401 7.02 6.3732 6.87733 6.47302 6.76133C6.5735 6.64667 6.60632 6.564 6.67331 6.43133C6.73963 6.29933 6.7068 6.18333 6.65656 6.084C6.60632 5.98533 6.20841 5.01 6.04295 4.61333C5.88152 4.22667 5.7174 4.27933 5.59481 4.27333C5.47892 4.26733 5.34628 4.26667 5.21298 4.26667C5.08034 4.26667 4.86464 4.316 4.68244 4.51467C4.50023 4.71333 3.98576 5.19267 3.98576 6.16733C3.98576 7.14267 4.69918 8.08467 4.79833 8.21667C4.89747 8.34867 6.20172 10.35 8.19862 11.208C8.67356 11.412 9.04467 11.534 9.33339 11.6253C9.81034 11.776 10.2444 11.7547 10.5874 11.704C10.9699 11.6473 11.765 11.2247 11.9312 10.762C12.0973 10.2993 12.0973 9.902 12.0471 9.82C11.9975 9.73667 11.8649 9.68733 11.6659 9.588Z" fill="#FF0000"/>
                                </svg>
                                55*47863*3
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 bg-danger">Espaço para o mapa</div>
        </div>
    </section>-->
<!--
<section class="contato py-lg-4 py-2" id="contato">
    <div class="container px-1 px-lg-0">
        <div class="row">
            <h2 class="w-100 text-center h2 h2-50 text-light mb-4">Entre em contato</h2>
            <div class="col-12 bg-white p-1">
                <form action="">
                    <div class="d-lg-flex d-block">
                        <input type="text" class="form-control p  m-1" placeholder="Nome*">
                        <input type="number" class="form-control p  m-1 mask-telefone" placeholder="Telefone*">
                        <input type="email" class="form-control p  m-1" placeholder="E-mail*">
                    </div>
                    <textarea class="form-control p  m-1" name="" id="" cols="30" rows="10" placeholder="Mensagem*"></textarea>
                    <div class="d-lg-flex d-block pt-lg-1 pt-0 m-1 align-items-center">
                    <label class="checkbox-round mt-lg-1 mt-0">
                        <input type="checkbox">
                        <span class="checkmark mt-0-25"></span>
                        <p class="p ms-1">Li e aceito a <span>Política de privacidade</span> da Milenium transportes</p>
                    </label>
                        <button class="btn-outline-primary btn text-dark p ms-lg-auto d-flex ml-auto">Entre em contato</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
                        -->
</main>