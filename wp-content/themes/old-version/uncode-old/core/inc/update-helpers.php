<?php
require_once get_template_directory() . '/core/inc/UncodeAPI.class.php';
require_once get_template_directory() . '/core/inc/Envato.class.php';
require_once get_template_directory() . '/core/inc/UncodeCommunicator.class.php';

function isInstallationLegit() {
	if (!class_exists('Envato')) {
		return;
	}

    $communicator = new UncodeCommunicator();

    $envato = new Envato();
    $data = $envato->getToolkitData();

    $server_name = empty($_SERVER['SERVER_NAME']) ?
        $_SERVER['HTTP_HOST']: $_SERVER['SERVER_NAME'];

    if (
        substr_count($server_name, '.dev') > 0 ||
        substr_count($server_name, '.local') > 0
    ) { return true; }

    if (isset($data['api_key'])) {
        if (!empty($data['purchase_code'])) {
            $con_domain = $communicator->getConnectedDomains(
                    $data['purchase_code']
                );

            $len_con_domain = strlen($con_domain);
            $len_server_name = strlen($server_name);
            if ($len_con_domain > $len_server_name) {
                $maybe_subdomain = $con_domain;
            } else {
                $maybe_subdomain = $server_name;
            }
            if (
                $con_domain != $server_name &&
                strpos($maybe_subdomain, $con_domain) === false &&
                !empty($con_domain) &&
                substr_count($con_domain, '.dev') == 0 &&
                substr_count($con_domain, '.local') == 0
            ) {
                return false;
            }
        }
    }

    return true;
}

function requiredDataEmpty() {
    $communicator = new UncodeCommunicator();

    if (!class_exists('Envato')) {
		return;
	}

    $envato = new Envato();
    return $envato->toolkitDataEmpty();
}

