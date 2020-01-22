/**
 * sendinblue subscription form - Javascript controller class
 *
 * 
 *
 * @copyright 2019 Roy Hadrianoro
 *
 * @license MIT
 *
 * @package sendinbluesubscriptionform
 * @version 1.0
 * @author  Roy Hadrianoro <roy.hadrianoro@schlix.com>
 * @link    https://www.schlix.com
 */
SCHLIX.CMS.sendinbluesubscriptionformController = class extends SCHLIX.CMS.Base  {  
    /**
     * Constructor
     */
    constructor ()
    {
        super("sendinbluesubscriptionform-block-item");
    };

 
    runCommand (command, evt)
    {
        console.log(arguments);
        return;
        switch (command)
        {
            // case 'config':
            //     this.redirectToCMSCommand("editconfig");
            //     return true;
            //     break;
            
            default:
                return super.runCommand(command, evt);
                break;
        }
    }
};


