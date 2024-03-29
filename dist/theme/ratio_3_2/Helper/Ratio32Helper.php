<?php
/**
 * ヘルパー：Ratio32Helper
 * Helper/Ratio32Helper.php
 */

class Ratio32Helper extends BcBaserHelper {

	/**
	 * get_current_widget_area
	 *
	 * usage: $this->Ratio32->get_current_widget_area()
	 */
	private function get_current_widget_area(){
		if ( isset( $this->_View->viewVars['widgetArea'] ) ) {
			return $this->_View->viewVars['widgetArea'];
		} else {
			return false;
		}
	}


	/**
	 * widget_edit_link
	 *
	 * usage: $this->Ratio32->widget_edit_link( $area_id )
	 */
	public function widget_edit_link( $area_id = null ) {
		if( !$this->isAdminUser() ) {
			return;
		}
		if( !$area_id && empty( $this->_View->viewVars['widgetArea'] ) ) {
			return;
		}
		echo $this->getLink(
			'<i class="fa fa-pencil-square-o"></i> ウィジェット編集',
			sprintf(
				'/admin/widget_areas/edit/%s',
				$area_id ?: $this->_View->viewVars['widgetArea']
			),
			[
				'class'  => 'widget-edit-link',
				'target' => '_blank'
			]
		);
	}


	/**
	 * get_mail_icon
	 *
	 * usage: $this->Ratio32->get_mail_icon( $args )
	 */
	public function get_mail_icon( $args = array() ) {
		$args = array_merge(array(
			'alt' => 'お問い合わせ',
			'url' => '/contact',
			'blank' => false
		), $args);

		$link_text = '<i class="fa fa-envelope"></i><span class="sr-only">' . $args['alt'] . '</span>';
		$link_options = array();

		$link_options['class'] = 'btn btn-round btn-mail';
		if( $args['blank'] ) {
			$link_options['target'] = '_blank';
		}

		$link = $this->getLink( $link_text, $args['url'], $link_options );
		return $link;

	}


	/**
	 * get_sns_icon
	 *
	 * usage: $this->Ratio32->get_sns_icon( $args )
	 */
	public function get_sns_icon( $args = array() ) {
		$args = array_merge(array(
			'sns' => 'twitter',
			'url' => 'http://twitter.com/basercms',
			'blank' => true,
		), $args);

		$link_text = '';
		$link_options = array();
		if( $args['blank'] ) {
			$link_options['target'] = '_blank';
		}

		if ( $args['sns'] == 'facebook' ) {
			$link_text = '<i class="fa fa-facebook"></i><span class="sr-only">Facebookページ</span>';
			$link_options['class'] = 'btn btn-round btn-facebook';
		} else if ( $args['sns'] == 'line' ) {
			$link_text = '<i class="fa fa-line"></i><span class="sr-only">LINE #64;</span>';
			$link_options['class'] = 'btn btn-round btn-line';
		} else if ( $args['sns'] == 'instagram' ) {
			$link_text = '<i class="fa fa-instagram"></i><span class="sr-only">Instagram</span>';
			$link_options['class'] = 'btn btn-round btn-instagram';
		} else if ( $args['sns'] == 'youtube' ) {
			$link_text = '<i class="fa fa-youtube"></i><span class="sr-only">YouTubeチャンネル</span>';
			$link_options['class'] = 'btn btn-round btn-youtube';
		} else if ( $args['sns'] == 'google-plus' ) {
			$link_text = '<i class="fa fa-google-plus"></i><span class="sr-only">Google+</span>';
			$link_options['class'] = 'btn btn-round btn-google-plus';
		} else { //twitter
			$link_text = '<i class="fa fa-twitter"></i><span class="sr-only">Twitter</span>';
			$link_options['class'] = 'btn btn-round btn-twitter';
		}

		$link = $this->getLink( $link_text, $args['url'], $link_options );
		return $link;

	}


	/**
	 * get_global_menu
	 *
	 * usage: $this->Ratio32->get_global_menu( $tree, $currentId, $args = array() )
	 */
//    public function get_global_menu( $tree, $currentId, $args = array() ) {
//        $args = array_merge(array(
//            'ul_class' => 'global-menu',
//            'li_class' => 'global-menu-item',
//            'active_class' => 'current',
//        ), $args);
//
//        $prefix = '';
//        $output = '';
//
//        if (!isset($level)) {
//            $level = 1;
//        }
//        if(!isset($currentId)) {
//            $currentId = null;
//        }
//
//        $output .= empty( $args['ul_class'] ) ? '<ul>' : '<ul class="' . $args['ul_class'] . '">';
//        $output .= "\n";
//
//        foreach ($tree as $key => $content) {
//
//            if ($content['Content']['title']) {
//                if(!$content['Content']['exclude_menu']) {
//
//                    $classies = array();
//                    $options = array();
//
//                    $no = sprintf( '%02d', $key + 1 );
//                    $classies[] = $args['li_class'];
//                    $classies[] = 'menu' . $no;
//
//                    if ( $this->BcArray->first($content, $key) ) {
//                        $classies[] = 'first';
//                    } elseif ( $this->BcArray->last($content, $key) ) {
//                        $classies[] = 'last';
//                    }
//
//                    if($content['Content']['id'] == $currentId || $this->isContentsParentId($currentId, $content['Content']['id'])) {
//                      $classies[] = $args['active_class'];
//                    }
//
//                    if(!empty($content['Content']['blank_link'])) {
//                        $options = ['target' => '_blank'];
//                    }
//
//                    $class = ' class="' . implode( ' ', $classies ) . '"';
//
//                    if (!Configure::read('BcRequest.agent') && $this->base == '/index.php' && $content['url'] == '/') {
//                        $output .= '<li' . $class . '>';
//                        $output .= str_replace('/index.php', '', $this->getLink($content['Content']['title'], $content['Content']['url']));
//                        $output .= '</li>' . "\n";
//                    } else {
//                        $output .= '<li' . $class . '>';
//                        $output .= $this->getLink($content['Content']['title'], $prefix . $content['Content']['url'], $options);
//                        $output .= '</li>' . "\n";
//                    }
//
//                }
//
//            }
//
//        }
//        $output .= '</ul>' . "\n";
//
//        return $output;
//    }


	/**
	 * get_main_image
	 *
	 * usage: $this->Ratio32->get_main_image( $args )
	 */
	public function get_main_image( $args = array() ) {
		$args = array_merge(array(
			'num' => 1,
			'type' => 'none',
			'h' => 'h2',
			'more' => false
		), $args);

		$id = 'mainvisual-' . $args['num'];

		$ThemeConfig = ClassRegistry::init('ThemeConfig');
		$data = $ThemeConfig->findExpanded();
		$output = '';

		$image_caption = htmlspecialchars( $data['main_image_alt_' . $args['num']] );
		$image_caption = preg_replace('/\s{2}/', '<br>', $image_caption );
		$image_caption = explode( '|', $image_caption );

		$image_link = $data['main_image_link_' . $args['num']];
		$user_path = 'files/theme_configs/' . $data['main_image_' . $args['num']];
		if ( ( $data['main_image_' . $args['num']] )&&( file_exists( WWW_ROOT . $user_path ) ) ) {
			$image_path = $this->getUrl() . $user_path;
		} else {
			// load theme images
			$image_path = $this->getThemeUrl() . 'files/theme_configs/main_image_' . $args['num'] . '.jpg';
		}

		if ( $args['type'] === 'jumbotron' ) {

			if ( $image_link ) {
				$output .= '<a href="' . $image_link . '" id="' . $id . '" class="jumbotron">' . "\n";
			} else {
				$output .= '<div id="' . $id . '" class="jumbotron">' . "\n";
			}
			if( $image_path ) {
				$output .= '<img src="' . $image_path . '" class="jumbotron-object" alt="';
				if( isset( $image_caption[2] ) ) {
					$output .= htmlspecialchars( $image_caption[2] );
				}
				$output .= '" />' . "\n";
			}
			if( isset( $image_caption[1] ) ) {
				$output .= '<' . $args['h'] . ' class="h1">' . $image_caption[0] . '</' . $args['h'] . '>' . "\n";
				$output .= '<p class="jumbotron-caption">' . $image_caption[1] . '</p>' . "\n";
			} else {
				$output .= '<' . $args['h'] . '>' . $image_caption[0] . '</' . $args['h'] . '>' . "\n";
			}
			if ( $image_link ) {
				$output .= '</a>' . "\n";
			} else {
				$output .= '</div>' . "\n";
			}

		} else if( $args['type'] === 'thumbnail' ) {

			if( $image_path ) {
				$thumbmail_class = 'thumbnail';
			} else {
				$thumbmail_class = 'thumbnail thumbnail-noimg';
			}
			if ( $image_link ) {
				$output .= '<a href="' . $image_link . '" id="' . $id . '" class="' . $thumbmail_class . '">' . "\n";
			} else {
				$output .= '<div id="' . $id . '" class="' . $thumbmail_class . '">' . "\n";
			}
			if( $image_path ) {
				$output .= '<img src="' . $image_path . '" class="img-responsive" alt="';
				if( isset( $image_caption[2] ) ) {
					$output .= htmlspecialchars( $image_caption[2] );
				}
				$output .= '" />' . "\n";
			}
			$output .= '<div class="caption">' . "\n";

			if( isset( $image_caption[1] ) ) {
				$output .= '<' . $args['h'] . ' class="thumbnail-title">' . $image_caption[0] . '</' . $args['h'] . '>' . "\n";
				$output .= '<p class="thumbnail-caption">' . $image_caption[1] . '</p>' . "\n";
			} else {
				$output .= '<' . $args['h'] . ' class="thumbnail-title">' . $image_caption[0] . '</' . $args['h'] . '>' . "\n";
			}
			if ( $args['more'] ) {
				$output .= '<p class="thumbnail-more"><span class="btn btn-primary"><i class="fa fa-angle-right"></i> もっと詳しく</span></p>' . "\n";
			}
			$output .= '<!-- /.caption thumbnail-caption --></div>' . "\n";
			if ( $image_link ) {
				$output .= '</a>' . "\n";
			} else {
				$output .= '</div>' . "\n";
			}

		} else if( $args['type'] === 'media' ) {

			$output .= '<div id="' . $id . '" class="media">' . "\n";
			if ( $image_link ) {
				$output .= '<a href="' . $image_link . '">' . "\n";
			}
			if( $image_path ) {
				$output .= '<div class="media-left">' . "\n";
				$output .= '<img src="' . $image_path . '" class="media-object" alt="';
				if( isset( $image_caption[2] ) ) {
					$output .= htmlspecialchars( $image_caption[2] );
				}
				$output .= '" />' . "\n";
				$output .= '</div>' . "\n";
			}
			$output .= '<div class="media-body">' . "\n";

			if( isset( $image_caption[1] ) ) {
				$output .= '<' . $args['h'] . ' class="media-title">' . $image_caption[0] . '</' . $args['h'] . '>' . "\n";
				$output .= '<p class="media-excerpt">' . $image_caption[1] . '</p>' . "\n";
			} else {
				$output .= '<' . $args['h'] . ' class="media-title">' . $image_caption[0] . '</' . $args['h'] . '>' . "\n";
			}
			$output .= '<!-- /.media-body --></div>' . "\n";
			if ( $image_link ) {
				$output .= '</a>' . "\n";
			}
			$output .= '<!-- /.media --></div>' . "\n";

		} else { //none

			if( $image_path ) {
				$output .= '<img src="' . $image_path . '" class="img-responsive" alt="';
				if( isset( $image_caption[2] ) ) {
					$output .= htmlspecialchars( $image_caption[2] );
				}
				$output .= '" />';
			} else {
				$output .= '<div class="text-danger">メイン画像を設定してください。</div>';
			}

		}

		echo $output;
	}

/**
 * ウィジェットが有効かどうか判定
 * @param $id
 * @return bool
 */
	function isWidgetAvailable($id) {
		$WidgetArea = ClassRegistry::init('WidgetArea');
		$widgetArea = $WidgetArea->find('first', ['conditions' => ['WidgetArea.id' => $id]]);
		if (empty($widgetArea['WidgetArea']['widgets'])) {
			return false;
		}
		$widgets = BcUtil::unserialize($widgetArea['WidgetArea']['widgets']);
		foreach ($widgets as $widget) {
			if( $widget[key($widget)]['status'] == 1 ){
				return true;
			}
		}
		return false;
	}




}

