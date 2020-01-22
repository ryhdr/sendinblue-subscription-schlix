/**
 * sendinblue subscription form - Javascript admin controller class
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
SCHLIX.CMS.sendinbluesubscriptionformAdminController = class extends SCHLIX.CMS.BaseController  {  
    /**
     * Constructor
     */
    constructor ()
    {
        super("sendinbluesubscriptionform");
    };
 
    runCommand (command, evt)
    {
        switch (command)
        {
            case 'config':
                this.redirectToCMSCommand("editconfig");
                return true;
                break;
            
            default:
                return super.runCommand(command, evt);
                break;
        }
    }
};


