<div class="form-group">
            <div class="dropdown" style="position:relative">
              <a href="#" class="btn  btn-category dropdown-toggle" data-toggle="dropdown">Seleccione Categoria <span class="caret"></span></a>

              <ul class="dropdown-menu">
                <?php
                $cat = 1;
                $subcat0 = 0;
                $subcat = 1;
                $sub_subcat = 1;
                foreach ($categorias as $categoria) {
                  ?>
                  <li>
                    <a onclick="myFunction(<?php echo $cat ?>,<?php echo 0 ?>, <?php echo 0 ?>)" class="trigger right-caret">&nbsp<?php echo $categoria->cat_nombre ?><?php //echo 'cat: ' . $cat . ' , subcat: ' . $subcat0  ?>&nbsp</a>

                    <ul class="dropdown-menu sub-menu">
                      <?php
                      $subcategorias0 = DB::select("SELECT * FROM bdp_subcategoria WHERE cat_id IS NULL");


                      foreach ($subcategorias0 as $subcategoria) {
                        ?>
                        <li>
                          <a  onclick="myFunction(<?php echo $cat ?>,<?php echo 0 ?>, <?php echo 0 ?>)" class="trigger right-caret" >&nbsp<?php echo $subcategoria->subcat_nombre ?>&nbsp</a>
                        </li>

                        <?php
                      }
                      $subcategorias = DB::select("SELECT * FROM bdp_subcategoria WHERE cat_id=? ORDER BY subcat_id ASC", array($cat));



                      foreach ($subcategorias as $subcategoria) {
                        ?>
                        <li>
                          <a class="trigger right-caret" onclick="myFunction(<?php echo $cat ?>,<?php echo $subcat ?>, <?php echo 0 ?>)">&nbsp<?php echo $subcategoria->subcat_nombre ?><?php // . ' , cat: ' . $cat . ' , subcat: ' . $subcat       ?>&nbsp</a>

                          <?php //$subcat = $subcat + 1;  ?>
                          <ul class="dropdown-menu sub-menu">
                            <?php
                            $sub_subcategorias0 = DB::select("SELECT * FROM bdp_sub_subcategoria WHERE cat_id IS NULL");


                            foreach ($sub_subcategorias0 as $sub_subcategoria0) {
                              ?>
                              <li>
                                <a class="trigger right-caret" onclick="myFunction(<?php echo $cat ?>,<?php echo $subcat ?>, <?php echo 0 ?>)">&nbsp<?php echo $sub_subcategoria0->sub_subcat_nombre ?>&nbsp</a>
                              </li>

                              <?php
                            }

                            //$subcat= $subcat + 1;
                            $sub_subcategorias = DB::select("SELECT * FROM bdp_sub_subcategoria WHERE cat_id = ? AND subcat_id=?", array($cat, $subcat));

                            foreach ($sub_subcategorias as $sub_subcategoria) {
                              //if (is_null($sub_subcategoria->subcat_id)): $high = 1  ;else: 
                              ?>

                              <li>
                                <a class="trigger right-caret" onclick="myFunction(<?php echo $cat ?>,<?php echo $subcat ?>, <?php echo $sub_subcategoria->sub_subcat_id ?>)">&nbsp<?php echo $sub_subcategoria->sub_subcat_nombre ?><?php // . ' , cat: ' . $cat . ' , subcat: ' . $subcat . ' , sub_subcat: ' . $sub_subcategoria->sub_subcat_id        ?>&nbsp </a>

                              </li>
                              <?php
                              //endif;
                              //$subcat = $subcat + 1;
                            }
                            $subcat = $subcat + 1;
                            //$subcat = $subcat++;
                            //$subcat = $subcat++;
                            //$cat= $cat++;
                            ?>
                          </ul>
                        </li>
                        <?php
                      }
                      $cat = $cat + 1;
                      //$cat = $cat++;
                      ?>
                    </ul>
                  </li>
                <?php }
                ?>
              </ul>
              </select>
            </div>
          </div>