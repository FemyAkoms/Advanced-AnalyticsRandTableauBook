<section>
    <div class="section5background">
        <div class="rbpetext">
            <p>Recommended by People Eliminating Debt & <br> Living a more Fulfilled Lifestyle. </p>
        </div>
        <div class="container">
            <div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  v-if="slider.length > 0">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" v-bind:data-slide-to="m" v-for="(j,m) in slider" v-bind:class="[m==0 ? 'active' : '']"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item" v-for="(d,j) in slider" v-bind:class="[j==0 ? 'active' : '']">
                            <div class="container">
                                <div class="row">
                                    <!-- Free Tier -->
                                    <div class="col-lg-4" v-for="(m,k) in d.items">
                                        <div class="bgimageto mb-5 mb-lg-0">
                                            <div class="card-body">
                                                <div class="flex-container starmargin">
                                               <!-- {{m.ratings}} -->
                                                    <div>
                                                        
                                                        <span class="fa fa-star" v-bind:class="[(m.ratings==1||m.ratings==2||m.ratings==3||m.ratings==4||m.ratings==5) ? 'checked':''] "></span>
                                                        <span class="fa fa-star" v-bind:class="[(m.ratings==2||m.ratings==3||m.ratings==4||m.ratings==5) ? 'checked':''] "></span>
                                                        <span class="fa fa-star" v-bind:class="[(m.ratings==3||m.ratings==4||m.ratings==5) ? 'checked':''] "></span>
                                                        <span class="fa fa-star" v-bind:class="[(m.ratings==4||m.ratings==5)? 'checked':''] "></span>
                                                        <span class="fa fa-star" v-bind:class="[m.ratings==5 ? 'checked':''] "></span>
                                                    </div>
                                                    <div class="gsv">{{m.review}}</div>
                                                </div>
                                                <div class="testimonialtextmar">
                                                    <p>
                                                        {{m.comment}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="briandiv">
                                            <p class="textbrian">{{m.name}}</p>
                                            <p class="fouderbacklin">{{m.designation}}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
</section>