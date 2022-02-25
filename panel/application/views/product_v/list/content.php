<div class="row">
<div class="col-md-12">
				<h4 class="m-b-lg">
                    Ürünler

                    <a href="<?php echo base_url("product/new_form"); ?>" class="btn btn-outline btn-primary btn-xs pull-right">
                        <i class="fa fa-plus">Yeni Ekle</i>
                    </a>
                </h4>
			</div>
    <div class="col-md-12">
        <div class="widget p-lg">

        <?php
            if(empty($items)){
        ?>
            <div class="alert alert-info text-center">               
                <p>Burada Herhangi Bir Veri Bulunamadı. Eklemek için <a href="<?php echo base_url("product/new_form") ?>">Tıklayınız</a></p>
            </div>

        <?php   } else {
        ?>

            <table class="table table-striped table-hover">
               <thead>
                   <th>#id</th>
                   <th>url</th>
                   <th>Ad</th>
                   <th>Açıklama</th>
                   <th>Durumu</th>
                   <th>İşlem</th>
               </thead>

               <tbody>
                    <?php foreach($items as $item){ ?> 
                    <tr>
                        <td><?php echo $item->id ?></td>                      
                        <td><?php echo $item->url ?></td>                      
                        <td><?php echo $item->title ?></td>                      
                        <td><?php echo $item->description ?></td>                      
                        <td>
                            <input                            
                            type="checkbox" 
                            data-switchery 
                            data-color="#10c469"
                            <?php
                            echo ($item->isActive) ? "checked":""; ?>
                            />
                        </td>
                        <td>
                            <a href="#" type="button" class="btn btn-sm btn-danger btn-outline"><i class="fa fa-trash"></i> Sil</a>                 
                            <a href="#" type="button" class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil"></i> Düzenle</a>
                        </td>
                    </tr>
                    <?php } ?>
               </tbody>
            </table>
            <?php } ?>
        </div><!-- .widget -->
    </div>
</div>