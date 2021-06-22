<?php foreach ($items AS $item): ?>

    <?php
    $user = $this->userRepository->find($item->user_id);
    $highlight = $this->highlightRepository->getItemHighlight($item->id);
    ?>

    <?php if($highlight): ?>
    <a class="preview highlight" href="artikel?id=<?php echo e($item->id); ?>">
    <?php else: ?>
    <a class="preview" href="artikel?id=<?php echo e($item->id); ?>">
    <?php endif; ?>
        <img class="image" src="../../pictures/<?php echo e($item->picture) ?>">
        <div class="text">

        <h1 style="margin: 0;"><?php echo e($item->title); ?></h1> 
    
        <?php $len = strlen($item->description);?>

        <?php if ($len <= 300): ?>
            <p><?php  echo e($item->description); ?></p>
        <?php elseif ($len <= 400): ?>
            <p style="font-size: 22px"><?php  echo e($item->description); ?></p>
        <?php else: ?>
            <p style="font-size: 20px"><?php  echo e($item->short_description($item->description)); ?>...</p>
        <?php endif; ?>        

        <p class="row">

            <span style="font-size: 30px; font-weight: bold;">
            <?php echo e($item->price); ?>€ 
            <?php if ($item->negotiation === "ja"):?>
                <?php echo "VB"?>
            <?php endif; ?></span>

            <?php if ($item->status === "neu"): ?>
                <span class="neu"><?php echo "neu"?></span>
            <?php else: ?>
                <span class="gebraucht"><?php echo "gebraucht"?></span>
            <?php endif; ?>

            <span>
            <?php if($user->companyname):?>
                <?php echo("Händler");?>
            <?php else:?>
                <?php echo("Privat");?>
            <?php endif;?>
            , 
            <?php echo e($user->city); ?></span>  

            <i class="far fa-heart"></i>
            
        </p>
        
         
        </div>

    </a>

<?php endforeach; ?>