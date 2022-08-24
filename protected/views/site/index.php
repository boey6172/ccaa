      <!-- Default box -->

      <style>
        figure {
          position: relative
        }
        figcaption {
          position: absolute;
          width: 99%;
          line-height: 600px;
          text-align: center;
          left: 0;
          top: 0;
          text-shadow: 0 0 1px white;
          font-weight:bold;
          color: yellow;
          font-size: 60px;
        }
      </style>
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <figure>
           <img src="images/ball.jpg" alt="Image description goes here" width = 99%>
           <figcaption>Calapan City Athletic Association </figcaption>
        </figure>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <?php
          $this->widget(
            'booster.widgets.TbCarousel',
            array(
                'items' => array(
                    array(
                        'image' => 'images/ball.jpg',
                        'label' => 'First Thumbnail label',
                        'caption' => 'First Caption.'
                    ),
                    array(
                        'image' => 'images/second-placeholder830x400.gif',
                        'label' => 'Second Thumbnail label',
                        'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
                    ),
                    array(
                        'image' => 'images/third-placeholder830x400.gif',
                        'label' => 'Third Thumbnail label',
                        'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
                    ),
                ),
            )
        );
          ?>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box --> 