<?php
class ControllerExtensionModuleBossBlog extends Controller {
	private $error = array();
    private $_name = 'module_bossblog';
	public function index() {
		$this->load->language('extension/module/bossblog');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');
        
         /*  New Boss Blog */
         $data['heading_title'] = $this->language->get('heading_title');
         $data['text_boss_catalog'] = $this->language->get('text_boss_catalog');   
         $data['text_boss_category'] = $this->language->get('text_boss_category'); 
         $data['text_boss_articles'] = $this->language->get('text_boss_articles'); 
         $data['text_boss_comments'] = $this->language->get('text_boss_comments');   
         $data['text_boss_settings'] = $this->language->get('text_boss_settings');  
         
         $data['boss_category'] = $this->url->link('bossblog/category', 'user_token=' . $this->session->data['user_token'], 'SSL');
         $data['boss_articles'] = $this->url->link('bossblog/articles', 'user_token=' . $this->session->data['user_token'], 'SSL');
         $data['boss_comments'] = $this->url->link('bossblog/comment', 'user_token=' . $this->session->data['user_token'], 'SSL');
         $data['boss_settings'] = $this->url->link('bossblog/setting', 'user_token=' . $this->session->data['user_token'], 'SSL');
        /* End New Boss Blog */
        
       	if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

  		$data['breadcrumbs'] = array();

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/home', 'user_token=' . $this->session->data['user_token'], 'SSL'),
      		'separator' => false
   		);

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_module'),
			'href'      => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', 'SSL'),
      		'separator' => ' :: '
   		);
		
   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_heading'),
			'href'      => $this->url->link('extension/module/bossblog', 'user_token=' . $this->session->data['user_token'], 'SSL'),
      		'separator' => ' :: '
   		);
        
        $data['modules'] = array();
		
		if (isset($this->request->post['bossblog_module'])) {
			$data['modules'] = $this->request->post['bossblog_module'];
		} elseif ($this->config->get('bossblog_module')) { 
			$data['modules'] = $this->config->get('bossblog_module');
		}else{
			$data['modules'] = array();
		}
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/bossblog', $data));
	}

	private function validateDelete() {
		if (!$this->user->hasPermission('modify', 'extension/module/bossblog')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->error) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
    
    public function addLayout($data) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "layout WHERE name = '". $this->db->escape($data['name']) ."'");

		if ($query->num_rows && isset($data['layout_route'])) {
			$layout_id = $query->row['layout_id'];
			$this->db->query("DELETE FROM " . DB_PREFIX . "layout_route WHERE layout_id = '" . (int)$layout_id . "'");
			
			foreach ($data['layout_route'] as $layout_route) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "layout_route SET layout_id = '" . (int)$layout_id . "', store_id = '" . (int)$layout_route['store_id'] . "', route = '" . $this->db->escape($layout_route['route']) . "'");
			}
		} else if (isset($data['layout_route'])) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "layout SET name = '" . $this->db->escape($data['name']) . "'");
			$layout_id = $this->db->getLastId();
			
			foreach ($data['layout_route'] as $layout_route) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "layout_route SET layout_id = '" . (int)$layout_id . "', store_id = '" . (int)$layout_route['store_id'] . "', route = '" . $this->db->escape($layout_route['route']) . "'");
			}
		}
	}
    
    private function deleteLayout($layout_name) {
    	$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "layout WHERE name = '".$layout_name."'");
    	if($query->num_rows){
    		$layout_id = $query->row['layout_id'];
    		$this->db->query("DELETE FROM " . DB_PREFIX . "layout WHERE layout_id = '" . (int)$layout_id . "'");
    		$this->db->query("DELETE FROM " . DB_PREFIX . "layout_route WHERE layout_id = '" . (int)$layout_id . "'");
    		$this->db->query("DELETE FROM " . DB_PREFIX . "category_to_layout WHERE layout_id = '" . (int)$layout_id . "'");
    		$this->db->query("DELETE FROM " . DB_PREFIX . "product_to_layout WHERE layout_id = '" . (int)$layout_id . "'");
    		$this->db->query("DELETE FROM " . DB_PREFIX . "information_to_layout WHERE layout_id = '" . (int)$layout_id . "'");	
    		}
   	}
	
	public function install() {
        
        $this->load->model('user/user_group');
		
		$this->model_user_user_group->addPermission($this->user->getId(), 'access', 'bossblog/category');
		$this->model_user_user_group->addPermission($this->user->getId(), 'modify', 'bossblog/category');
        
        $this->model_user_user_group->addPermission($this->user->getId(), 'access', 'bossblog/articles');
		$this->model_user_user_group->addPermission($this->user->getId(), 'modify', 'bossblog/articles');
        
        $this->model_user_user_group->addPermission($this->user->getId(), 'access', 'bossblog/comment');
		$this->model_user_user_group->addPermission($this->user->getId(), 'modify', 'bossblog/comment');
        
        $this->model_user_user_group->addPermission($this->user->getId(), 'access', 'bossblog/setting');
		$this->model_user_user_group->addPermission($this->user->getId(), 'modify', 'bossblog/setting');
        
        $this->load->model('bossblog/articles');
        
        $this->model_bossblog_articles->checkBlogArticle();
        
        $this->load->model('bossblog/category');
        
       	$this->model_bossblog_category->checkBlogCategory();
        
        $this->load->model('bossblog/comment');
        
       	$this->model_bossblog_comment->checkBlogComment();
        
        $data = array(
			'module_bossblog_name'                  =>'Blog',
			'module_bossblog_limit'             	=>5,
			'module_bossblog_admin_limit'           =>5,
			'module_bossblog_comment_status'        =>1,
			'module_bossblog_approval_status'       =>0,
			'module_bossblog_image_category_width' 	=>880,
			'module_bossblog_image_category_height' =>295,
			'module_bossblog_image_article_width'   =>420,
			'module_bossblog_image_article_height'  =>300,
			'module_bossblog_image_title_width'  	=>98,
			'module_bossblog_image_title_height'  	=>70,
			'module_bossblog_image_related_width'   =>271,
			'module_bossblog_image_related_height'  =>198,                   
		);
        
        $this->load->model('setting/setting');
        
        $this->model_setting_setting->editSetting($this->_name, $data);
			
		$layout = array (
			'name' => 'Boss Blog',
			'layout_route' => array(
       			0 => array (
					'store_id' => 0,
					'route' => 'bossblog/%'
				)
			)
		);
        
        $this->addLayout($layout);	
		
 	}
	
	public function uninstall() {
        
        $this->load->model('setting/setting');
        
        $this->model_setting_setting->deleteSetting($this->_name);
        
        $this->load->model('bossblog/bossblog');
        
        $this->model_bossblog_bossblog->dropBlog();
    }
}
?>
