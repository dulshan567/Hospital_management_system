<div class="page-section bg-green">
  <div class="container">
    <h1 class="text-center wow fadeInUp">Latest News</h1>
    <div id="news-carousel" class="carousel slide mt-5" data-ride="carousel">
      <div class="carousel-inner">

        <?php
        $chunkedNews = $news->chunk(3); // Chunk the news into groups of three
        ?>

        <?php $__currentLoopData = $chunkedNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="carousel-item<?php echo e($index == 0 ? ' active' : ''); ?>">
          <div class="row">

            <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $innerIndex => $newss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 py-2 wow zoomIn<?php echo e($innerIndex == 0 ? ' active' : ''); ?>">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#"><?php echo e($newss->status); ?></a>
                  </div>
                  <a href="blog-details.html" class="post-thumb">
                    <img src="Newsimage/<?php echo e($newss->image); ?>" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="blog-details.html"><?php echo e($newss->Title); ?></a></h5>
                  <div class="site-info">
                    <div class="avatar mr-2">
                      <div class="avatar-img">
                        <img src="Newsimage/<?php echo e($newss->image); ?>" alt="">
                      </div>
                      <span>G+ Hospital</span>
                    </div>
                    <span class="mai-time"></span> <?php echo e($newss->created_at); ?>

                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>

      <a class="carousel-control-prev" href="#news-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#news-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
    <div class="col-12 text-center mt-4 wow zoomIn">
      <a href="<?php echo e(url('news')); ?>" class="btn btn-primary">Read More<div class="fa-3x"></div></a>
    </div>
  </div>
</div> <!-- .page-section -->
<?php /**PATH C:\xwamp\htdocs\laraval\Hospital-app\resources\views/latestn.blade.php ENDPATH**/ ?>