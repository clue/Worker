<?php

/**
 * Worker slave using STDIN/STDOUT to communicate with master
 * 
 * @author Christian Lück <christian@lueck.tv>
 * @copyright Copyright (c) 2011, Christian Lück
 * @license http://www.opensource.org/licenses/mit-license MIT License
 * @package Worker
 * @version v0.0.1
 * @link https://github.com/clue/Worker
 */
class Worker_Communicator_Stdio extends Worker_Communicator{
    /**
     * don't bother trying to closing standard input/output streams 
     */
    public function close(){ }
    
    public function getStreamRead(){
        return STDIN;
    }
    
    public function getStreamWrite(){
        return STDOUT;
    }
}
