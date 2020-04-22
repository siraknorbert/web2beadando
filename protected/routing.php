<?php 
if(!array_key_exists('page', $_GET) || empty($_GET['page']))
	$_GET['page'] = 'home';

switch ($_GET['page']) 
{
	case 'login': !IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/login.php' : header('Location: index.php'); break;
	case 'reg': !IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/register.php' : header('Location: index.php'); break;
	case 'members': IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/list_members.php' : header('Location: index.php'); break;
	case 'profile': IsUserLoggedIn() ? require_once PROTECTED_DIR.'normal/profile.php' : header('Location: index.php'); break;
	case 'change_password': require_once PROTECTED_DIR.'user/change_password.php'; break;
	case 'topics': require_once PROTECTED_DIR.'topic/load_topics.php'; break;
	case 'search': require_once PROTECTED_DIR.'normal/search.php'; break;
	case 'load_posts': require_once PROTECTED_DIR.'topic/load_posts.php'; break;
	case 'edit_del_post': require_once PROTECTED_DIR.'topic/edit_del_post.php'; break;
	case 'new_post': require_once PROTECTED_DIR.'topic/new_post.php'; break;
	case 'new_topic': require_once PROTECTED_DIR.'topic/new_topic.php'; break;
	case 'delete_topic': require_once PROTECTED_DIR.'topic/delete_topic.php'; break;
	case 'like_dislike': require_once PROTECTED_DIR.'topic/like_dislike.php'; break;
	case 'report': require_once PROTECTED_DIR.'user/report.php'; break;
	case 'logout': IsUserLoggedIn() ? UserLogout() : header('Location: index.php'); break;
	case 'home': require_once PROTECTED_DIR.'normal/home.php'; break;
	case 'change_perm': require_once PROTECTED_DIR.'user/change_permission.php'; break;
	default: require_once PROTECTED_DIR.'normal/404.php'; break;
}
?>