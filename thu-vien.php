                        <!--    <div class="game_lien_quan">
                            <div class="dv_lienquan">
                                                        <div class="hey_lq">
                                                            <?php 
                                                                $postType = 'download';
                                                                $taxonomyName = 'nen_tang';
                                                                $taxonomy = get_the_terms(get_the_ID(), $taxonomyName);
                                                                if ($taxonomy){
                                                                   echo '<div class="relatedcat">';
                                                                   $category_ids = array();
                                                                   foreach($taxonomy as $individual_category) $category_ids[] = $individual_category->term_id;
                                                                   $args = array( 
                                                                      'post_type' =>  $postType,
                                                                      'post__not_in' => array(get_the_ID()),
                                                                      'posts_per_page' => 4,
                                                                      'tax_query' => array(
                                                                         array(
                                                                            'taxonomy' => $taxonomyName,
                                                                            'field'    => 'term_id',
                                                                            'terms'    => $category_ids,
                                                                         ),
                                                                      )
                                                                   );
                                                                   $my_query = new wp_query($args);
                                                                   if( $my_query->have_posts() ):
                                                                      echo '<h5 class="related-title">Game liên quan</h5><div class="jeg_block_container"><div class="jeg_posts jeg_load_more_flag">';
                                                                      while ($my_query->have_posts()):$my_query->the_post();
                                                                         echo '
                                                                                <article class="jeg_post jeg_pl_sm format-video">
                                                                                 <div class="jeg_thumb">
                                                                                    <a href="'.get_the_permalink().'">
                                                                                       <div class="thumbnail-container animate-lazy size-715 ">'.get_the_post_thumbnail( $post_id, 'full', array( 'class' =>'thumnail') ).'</div>
                                                                                    </a>
                                                                                 </div>
                                                                                 <div class="jeg_postblock_content">
                                                                                    <h3 class="jeg_post_title"> <a href="">'.get_the_title().'</a></h3>
                                                                                    <div class="jeg_post_meta">
                                                                                       <div class="jeg_meta_date"><a href="/"><i class="fa fa-clock-o"></i>'.get_the_date('d - m - Y').'</a></div>
                                                                                    </div>
                                                                                 </div>
                                                                              </article>
                                                                         ';
                                                                      endwhile;
                                                                      echo '</div></div>';
                                                                   endif; wp_reset_query();
                                                                   echo '</div>';
                                                                }
                                                            ?>
                                                        </div>
                                                </div>
                        </d -->