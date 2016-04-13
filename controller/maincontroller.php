<?php
/**
 * ownCloud - owncollab
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author ownCollab Team <info@owncollab.com>
 * @copyright ownCollab Team 2015
 */


namespace OCA\Owncollab\Controller;

use OCA\Owncollab\Helper;
use OCA\Owncollab\Db\Connect;
use OCP\AppFramework\Http\RedirectResponse;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\AppFramework\Http\DataResponse;
use OCP\AppFramework\Controller;
use OCP\IRequest;
use OCP\IURLGenerator;


\OCP\App::checkAppEnabled('owncollab');

class MainController extends Controller {

	/** @var string $userId
     * current auth user id  */
	private $userId;
	/** @var bool $isAdmin
     * true if current auth user consists into admin group */
	private $isAdmin;
	/** @var \OC_L10N $l10n
     * languages translations */
	private $l10n;
    /** @var Connect $connect
     * instance working with database */
    private $connect;

    /** @var IURLGenerator */
    private $urlGenerator;

    /**
     * MainController constructor.
     * @param string $appName
     * @param IRequest $request
     * @param $userId
     * @param $isAdmin
     * @param \OC_L10N $l10n
     * @param Connect $connect
     */
	public function __construct(
		$appName,
		IRequest $request,
		$userId,
		$isAdmin,
		\OC_L10N $l10n,
		Connect $connect,
        IURLGenerator $urlGenerator
    ){
		parent::__construct($appName, $request);
		$this->userId = $userId;
		$this->isAdmin = $isAdmin;
		$this->l10n = $l10n;
		$this->connect = $connect;
		$this->urlGenerator = $urlGenerator;
	}


	/**
	 * @NoAdminRequired
	 * @NoCSRFRequired
	 */
	public function index() {

// mostly for the home storage's free space
		//$dirInfo = \OC\Files\Filesystem::getFileInfo('/', false);
		//$storageInfo = \OC_Helper::getStorageInfo('/', $dirInfo);


		//$dirCont = \OC\Files\Filesystem::getMountManager()->getAll(); //getDirectoryContent('/');
		//$dir = \OCA\Files\Helper::getFiles('/');
        //$files = \OCA\Files\Helper::populateTags($dir);
//        $files = \OCA\Files\Helper::getFiles('/');
//        foreach($files as $file){
//            var_dump(\OCA\Files\Helper::formatFileInfo($file));
//        }

		//$navItems = \OCA\Files\App::getNavigationManager()->getAll();

		//var_dump($navItems);
		//var_dump($dir);
		//var_dump($files);


		//die;





		$params = [
			'current_user' => $this->userId,
		];

		return new TemplateResponse($this->appName, 'main', $params);
	}

}