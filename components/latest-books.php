<?php
<section class="latest-books-section">
    <div class="container">
        <h1 class="text-center mb-5">Latest Books</h1>
        
        <div id="latestBooksCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- First slide -->
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="book-card">
                                <img src="../../assets/img/books/java-1.png" alt="Java Method Overload" class="book-img">
                                <h5 class="book-title">Java Overload Method</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="book-card">
                                <img src="../../assets/img/books/java-2.png" alt="Java Method Overload" class="book-img">
                                <h5 class="book-title">Java Overload Method</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="book-card">
                                <img src="../../assets/img/books/java-3.png" alt="Java Method Overload" class="book-img">
                                <h5 class="book-title">Java Overload Method</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#latestBooksCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#latestBooksCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#latestBooksCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
                <button type="button" data-bs-target="#latestBooksCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#latestBooksCarousel" data-bs-slide-to="2"></button>
            </div>
        </div>
    </div>
</section>