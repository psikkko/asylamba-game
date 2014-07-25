<?php
include ATLAS;
include ZEUS;

$direction		= Utils::getHTTPData('dir');
$current		= Utils::getHTTPData('current');
$type			= Utils::getHTTPData('type');

if ($direction !== FALSE && $current !== FALSE && $type !== FALSE) {
	if (in_array($direction, array('next', 'prev'))) {
		if (in_array($type, array('general', 'xp', 'victory', 'defeat', 'ratio'))) {
			# var
			/*switch ($type) {
				case 'general': break;
				default: break;
			}*/

			$bot = ($direction == 'next')
				? (($current - PlayerRanking::PAGE > 1) ? $current - PlayerRanking::PAGE : 1)
				: $current + 1;

			$size = ($bot == 1)
				? $current - 1
				: PlayerRanking::PAGE;

			$S_PRM1 = ASM::$prm->getCurrentSession();
			ASM::$prm->newSession();
			ASM::$prm->loadLastContext(array(), array('generalPosition', 'ASC'), array($bot - 1, $size));

			if ($direction == 'next' && $bot > 1) {
				echo '<a class="more-item" href="' . APP_ROOT . 'ajax/a-morerank/dir-next/type-' . $type . '/current-' . $bot . '" data-dir="top">';
					echo 'afficher les joueurs précédents';
				echo '</a>';
			}

			for ($i = 0; $i < ASM::$prm->size(); $i++) {
				echo ASM::$prm->get($i)->commonRender('general');
			}

			if ($direction == 'prev' && ASM::$prm->size() == PlayerRanking::PAGE) {
				echo '<a class="more-item" href="' . APP_ROOT . 'ajax/a-morerank/dir-prev/type-' . $type . '/current-' . ($current + PlayerRanking::PAGE) . '">';
					echo 'afficher les joueurs suivants';
				echo '</a>';
			}

			ASM::$prm->changeSession($S_PRM1);
		}
	}
}
?>