	<?php
        
        if(isset($_SESSION['ok'])){
            if($_SESSION['ok'] == 1){   
                
                include_once 'config.php';
                
                ?>
                
    <div class="form-stack">
    	<div align="center">
    	            <iframe frameborder="0" 
                            scrolling="no" 
                            id="chat_embed" 
                            width="<?php echo $streamWidth;?>"
                            height="<?php echo $streamHeight;?>"
                            align="center"
                            src="<?php echo $streamURL;?>" >
                    </iframe>
    	</div>
    	
    	
    	
    	
    	
    	
    <div class="d-flex flex-column form-stack">
        <div>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-2">Sweep </a></li>
                <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-1">Position Set</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade" role="tabpanel" id="tab-1">
                    <section style="padding-top:16px;">
                        <div class="row align-items-center">
                            <div class="col-md-1 col-xl-2"></div>
                            <div class="col-md-5 col-xl-4">
                                <form method="post" id="formHorizontal">
                                    <div class="form-group d-flex flex-column"><input type="range" name="hvalue" value="128" min="1" max="255"><button class="btn btn-primary btn-block" type="submit" disabled="disabled" style="margin-top:20px;">Horizontal </button><input class="form-control" type="hidden"
                                            name="action" value="position"></div>
                                </form>
                            </div>
                            <div class="col-md-5 col-xl-4">
                                <form method="post" id="formVertical">
                                    <div class="form-group d-flex flex-column"><input type="range" name="vvalue" value="128" min="1" max="255"><button class="btn btn-primary btn-block" type="submit" disabled="disabled" style="margin-top:20px;">Vertical </button></div>
                                </form>
                            </div>
                            <div class="col-md-1 col-xl-2"></div>
                        </div>
                        <div class="row align-items-center" style="margin-top:50px;">
                            <div class="col-md-12">
                                <form method="post" id="formSendPosition">
                                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Send </button></div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="tab-pane fade show active" role="tabpanel" id="tab-2">
                    <section style="padding-top:16px;">
                        <div class="row align-items-center">
                            <div class="col-md-1 col-lg-1 col-xl-1">
                                <form class="invisible" method="post" id="formHiddenPassword">
                                    <div class="form-group"><input class="form-control" type="hidden" name="hiddenPassword" value="<?php echo $apikey; ?>"></div>
                                </form>
                            </div>
                            <div class="col-md-5 col-lg-3 col-xl-3">
                                <form method="post" id="formMinMax">
                                    <div class="form-group d-flex flex-column"><input type="range" name="minvalue" value="100" min="1" max="255" step="1"><input type="range" name="maxvalue" value="200" min="1" max="255" step="1" style="padding-top:0;margin-top:15px;"><button class="btn btn-primary btn-block"
                                            type="submit" disabled="disabled" style="margin-top:20px;">Range </button><input class="form-control" type="hidden" name="action" value="sweep"></div>
                                </form>
                            </div>
                            <div class="col-md-5 col-lg-4 col-xl-4">
                                <form method="post" id="formSpeed">
                                    <div class="form-group d-flex flex-column"><input type="range" name="speedvalue" value="150" min="1" max="2550" step="1" multiple=""><button class="btn btn-primary btn-block" type="submit" disabled="disabled" style="padding-bottom:6px;margin-bottom:0px;margin-top:20px;">Speed </button></div>
                                </form>
                            </div>
                            <div class="col-md-12 col-lg-3 col-xl-3">
                                <form method="post" id="formAxis">
                                    <div class="form-group d-flex flex-column">
                                        <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="radio" name="sweepAxis" value="horizontal" checked="">Horizontal</label></div>
                                        <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="radio" name="sweepAxis" value="vertical">Vertical</label></div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-1 col-xl-1"></div>
                        </div>
                        <div class="row align-items-center" style="margin-top:50px;">
                            <div class="col-md-12">
                                <form method="post" id="formSendSweep">
                                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Send </button></div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
   
      
    
    
    
    
    
    
    
    
    
    
        	
    </div>                
                <?php 
                
            }
        }
            
	           ?>
          