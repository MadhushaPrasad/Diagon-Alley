<?php
// Start PHP tags at the beginning of the file
?>
<section class="latest-books py-5">
    <div class="container">
        <h2 class="text-center mb-4">Latest Books</h2>
        
        <div id="latestBooksCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="book-card">
                                <div class="book-cover">
                                    <h2>Method Overload</h2>
                                    <h3>in Java</h3>
                                </div>
                                <p class="book-title">Java Overload Method</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="book-card">
                                <div class="book-cover">
                                    <h2>Method Overload</h2>
                                    <h3>in Java</h3>
                                </div>
                                <p class="book-title">Java Overload Method</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="book-card">
                                <div class="book-cover">
                                    <h2>Method Overload</h2>
                                    <h3>in Java</h3>
                                </div>
                                <p class="book-title">Java Overload Method</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Second slide -->
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="book-card">
                                <div class="book-cover">
                                    <h2>Method Overload</h2>
                                    <h3>in Java</h3>
                                </div>
                                <p class="book-title">Java Overload Method</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="book-card">
                                <div class="book-cover">
                                    <h2>Method Overload</h2>
                                    <h3>in Java</h3>
                                </div>
                                <p class="book-title">Java Overload Method</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="book-card">
                                <div class="book-cover">
                                    <h2>Method Overload</h2>
                                    <h3>in Java</h3>
                                </div>
                                <p class="book-title">Java Overload Method</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Third slide -->
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="book-card">
                                <div class="book-cover">
                                    <h2>Method Overload</h2>
                                    <h3>in Java</h3>
                                </div>
                                <p class="book-title">Java Overload Method</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="book-card">
                                <div class="book-cover">
                                    <h2>Method Overload</h2>
                                    <h3>in Java</h3>
                                </div>
                                <p class="book-title">Java Overload Method</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="book-card">
                                <div class="book-cover">
                                    <h2>Method Overload</h2>
                                    <h3>in Java</h3>
                                </div>
                                <p class="book-title">Java Overload Method</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Navigation -->
            <button class="carousel-control-prev" type="button" data-bs-target="#latestBooksCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#latestBooksCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

           
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#latestBooksCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
                <button type="button" data-bs-target="#latestBooksCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#latestBooksCarousel" data-bs-slide-to="2"></button>
            </div>
        </div>
    </div>
</section>

<style>
.latest-books {
    background-color: #f8f9ff;
}

.book-card {
    background: white;
    border-radius: 1rem;
    padding: 1rem;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 1rem;
}

.book-cover {
    background-color: #1a392a;
    color: white;
    padding: 3rem 1.5rem;
    border-radius: 0.5rem;
    text-align: center;
    margin-bottom: 1rem;
}

.book-cover h2 {
    font-size: 1.8rem;
    margin-bottom: 0.5rem;
}

.book-cover h3 {
    color: #ffd700;
    font-size: 1.4rem;
}

.book-title {
    text-align: center;
    font-size: 1.2rem;
    margin: 0;
    color: #000;
}

.carousel-indicators {
    position: relative;
    margin-top: 2rem;
}

.carousel-indicators button {
    width: 12px !important;
    height: 12px !important;
    border-radius: 50% !important;
    background-color: #ccc !important;
    border: none !important;
    margin: 0 4px !important;
}

.carousel-indicators button.active {
    background-color: #2962ff !important;
    width: 8px !important;
    height: 8px !important;
    margin-top: 2px !important;
}

/* Navigation arrows styles */
.carousel-control-prev,
.carousel-control-next {
    width: 40px;
    height: 40px;
    background-color: #2962ff;
    border-radius: 50%;
    top: 50%;
    transform: translateY(-50%);
    opacity: 0.8;
}

.carousel-control-prev {
    left: -50px;
}

.carousel-control-next {
    right: -50px;
}

.carousel-control-prev:hover,
.carousel-control-next:hover {
    opacity: 1;
}


.carousel-item {
    transition: transform .6s ease-in-out;
}


@media (max-width: 768px) {
    .carousel-control-prev,
    .carousel-control-next {
        display: none;
    }
}
</style>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const carousel = new bootstrap.Carousel(document.getElementById('latestBooksCarousel'), {
            interval: 5000, // Auto-slide every 5 seconds
            wrap: true     
        });
    });
</script>