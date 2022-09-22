<?php

/* backoffice/base_admin_sidebar.html.twig */
class __TwigTemplate_3e3c11cceeb28077dc4b151a58968388dbc13e6ac4f32d90ea56484e0c9d74b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["active"] = "active";
        // line 2
        echo "
<aside class=\"main-sidebar\">
    <section class=\"sidebar\">
        <ul class=\"sidebar-menu\">
            <li class=\"";
        // line 6
        if (array_key_exists("menu_dashboard", $context)) {
            echo "active";
        }
        echo " treeview\">
                <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard_index");
        echo "\">
                    <i class=\"fa fa-dashboard\"></i> <span>Tableau de bord</span>
                </a>
            </li>

            ";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 13
            echo "                ";
            // line 14
            echo "                <li class=\"treeview ";
            if ((array_key_exists("menu_user", $context) || array_key_exists("menu_role", $context))) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                    <a href=\"#\">
                        <i class=\"fa fa-users\"></i>
                        <span>Administrateur</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>

                    <ul class=\"treeview-menu\">

                        ";
            // line 26
            echo "                        <li class=\"treeview ";
            if (array_key_exists("menu_verificateur", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-users\"></i>
                                <span>Vérificateur</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"";
            // line 35
            if (array_key_exists("menu_verificateur_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verificateur_index");
            echo "\">
                                        <i class=\"fa fa-circle-o\"></i> Liste
                                    </a>
                                </li>
                            </ul>
                        </li>

                        ";
            // line 44
            echo "                        <li class=\"treeview ";
            if (array_key_exists("menu_user", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-user\"></i>
                                <span>Utilisateur</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"";
            // line 53
            if (array_key_exists("menu_user_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                ";
            // line 56
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
                // line 57
                echo "                                <li class=\"";
                if (array_key_exists("menu_user_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 58
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                                ";
            }
            // line 61
            echo "                            </ul>
                        </li>

                        ";
            // line 64
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
                // line 65
                echo "                            ";
                // line 66
                echo "                            <li class=\"treeview ";
                if (array_key_exists("menu_role", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                <a href=\"#\">
                                    <i class=\"fa fa-balance-scale\"></i>
                                    <span>Rôle</span>
                                    <span class=\"pull-right-container\">
                                        <i class=\"fa fa-angle-left pull-right\"></i>
                                    </span>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li class=\"";
                // line 75
                if (array_key_exists("menu_role_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                        <a href=\"";
                // line 76
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                    </li>
                                    <li class=\"";
                // line 78
                if (array_key_exists("menu_role_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                        <a href=\"";
                // line 79
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                    </li>
                                </ul>
                            </li>
                        ";
            }
            // line 84
            echo "                    </ul>
                </li>
            ";
        }
        // line 87
        echo "
            ";
        // line 89
        echo "\t        ";
        if (((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STAFF")) || "ROLE_VISITE") || "ROLE_RECEPTION")) {
            // line 90
            echo "                ";
            // line 91
            echo "                <li class=\"treeview ";
            if (array_key_exists("menu_historique", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                    <a href=\"#\">
                        <i class=\"fa fa-archive\"></i>
                        <span>Historique</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li class=\"";
            // line 100
            if (array_key_exists("menu_historique_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                            <a href=\"";
            // line 101
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("historique_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Voir</a>
                        </li>
                        <li class=\"treeview\">
                            <a href=\"http://dgsrmada.com:2021/ct/statistique\" target=\"_blank\">
                                <i class=\"fa fa-search\"></i>
                                <span>Consultation CT</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
            ";
        }
        // line 115
        echo "
            ";
        // line 116
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RECEPTION") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 117
            echo "                ";
            // line 118
            echo "                <li class=\"treeview ";
            if (array_key_exists("menu_reception", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                    <a href=\"#\">
                        <i class=\"fa fa-download\"></i>
                        <span>Réception</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        ";
            // line 127
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
                // line 128
                echo "                            ";
                // line 129
                echo "                            <li class=\"treeview ";
                if (array_key_exists("menu_type_reception", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                <a href=\"#\">
                                    <i class=\"fa fa-tasks\"></i>
                                    <span>Type</span>
                                    <span class=\"pull-right-container\">
                                        <i class=\"fa fa-angle-left pull-right\"></i>
                                    </span>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li class=\"";
                // line 138
                if (array_key_exists("menu_type_reception_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                        <a href=\"";
                // line 139
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_reception_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                    </li>
                                    <li class=\"";
                // line 141
                if (array_key_exists("menu_type_reception_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                        <a href=\"";
                // line 142
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_reception_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                    </li>
                                </ul>
                            </li>
                        ";
            }
            // line 147
            echo "
                        ";
            // line 149
            echo "                        <li class=\"treeview ";
            if (array_key_exists("menu_reception", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-caret-square-o-down\"></i>
                                <span>Réception</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"";
            // line 158
            if (array_key_exists("menu_reception_create_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 159
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                                <li class=\"";
            // line 161
            if (array_key_exists("menu_reception_duplicata", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 162
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_duplicata");
            echo "\"><i class=\"fa fa-circle-o\"></i> Duplicata</a>
                                </li>
                                <li class=\"";
            // line 164
            if (array_key_exists("menu_reception_search", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 165
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_search");
            echo "\"><i class=\"fa fa-circle-o\"></i> Rechercher</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            ";
        }
        // line 172
        echo "
            ";
        // line 173
        if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RECEPTION") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STAFF"))) {
            // line 174
            echo "                ";
            // line 175
            echo "                <li class=\"treeview ";
            if (array_key_exists("menu_statistique_reception", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                    <a href=\"#\">
                        <i class=\"fa fa-bar-chart\"></i>
                        <span>Statistique réception</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li class=\"";
            // line 184
            if (array_key_exists("menu_statistique_reception_voir", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                            <a href=\"";
            // line 185
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("statistique_reception_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Voir</a>
                        </li>
                    </ul>
                </li>
            ";
        }
        // line 190
        echo "
            ";
        // line 191
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_VISITE") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 192
            echo "                ";
            // line 193
            echo "                <li class=\"treeview ";
            if (((array_key_exists("menu_carte_grise", $context) || array_key_exists("menu_visite", $context)) || array_key_exists("menu_contre_visite", $context))) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                    <a href=\"#\">
                        <i class=\"fa fa-stethoscope\"></i>
                        <span>Visite technique</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        ";
            // line 202
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
                // line 203
                echo "                            ";
                // line 204
                echo "                            <li class=\"treeview ";
                if (array_key_exists("menu_type_visite", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                <a href=\"#\">
                                    <i class=\"fa fa-tasks\"></i>
                                    <span>Type</span>
                                    <span class=\"pull-right-container\">
                                        <i class=\"fa fa-angle-left pull-right\"></i>
                                    </span>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li class=\"";
                // line 213
                if (array_key_exists("menu_type_visite_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                        <a href=\"";
                // line 214
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_visite_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                    </li>
                                    <li class=\"";
                // line 216
                if (array_key_exists("menu_type_visite_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                        <a href=\"";
                // line 217
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_visite_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                    </li>
                                </ul>
                            </li>
                        ";
            }
            // line 222
            echo "
                        ";
            // line 224
            echo "                        <li class=\"treeview ";
            if (array_key_exists("menu_carte_grise", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-address-card-o\"></i>
                                <span>Renseignements véhicule</span>
                                <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                ";
            // line 234
            echo "                                ";
            // line 235
            echo "                                ";
            // line 236
            echo "                                <li class=\"";
            if (array_key_exists("menu_carte_grise_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 237
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>

                        ";
            // line 243
            echo "                        <li class=\"treeview ";
            if (array_key_exists("menu_visite", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-address-card\"></i>
                                <span>Visite</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                ";
            // line 253
            echo "                                ";
            // line 254
            echo "                                ";
            // line 255
            echo "                                <li class=\"";
            if (array_key_exists("menu_visite_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 256
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                                <li class=\"";
            // line 258
            if (array_key_exists("menu_visite_search", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 259
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_search");
            echo "\"><i class=\"fa fa-circle-o\"></i> Rechercher</a>
                                </li>
                            </ul>
                        </li>

                        ";
            // line 265
            echo "                        <li class=\"treeview ";
            if (array_key_exists("menu_contre_visite", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-times-rectangle\"></i>
                                <span>Contre visite</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                ";
            // line 275
            echo "                                ";
            // line 276
            echo "                                ";
            // line 277
            echo "                                <li class=\"";
            if (array_key_exists("menu_contre_visite_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 278
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contre_visite_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            ";
        }
        // line 285
        echo "
            ";
        // line 286
        if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_VISITE") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STAFF"))) {
            // line 287
            echo "                ";
            // line 288
            echo "                <li class=\"treeview ";
            if (array_key_exists("menu_statistique_visite", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                    <a href=\"#\">
                        <i class=\"fa fa-bar-chart\"></i>
                        <span>Statistique visite</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li class=\"";
            // line 297
            if (array_key_exists("menu_statistique_visite_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                            <a href=\"";
            // line 298
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("statistique_visite_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Voir</a>
                        </li>
                    </ul>
                </li>
            ";
        }
        // line 303
        echo "
            ";
        // line 304
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RECEPTION"))) {
            // line 305
            echo "                ";
            // line 306
            echo "                <li class=\"treeview ";
            if ((array_key_exists("menu_const_av_ded", $context) || array_key_exists("menu_const_av_ded_type", $context))) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                    <a href=\"#\">
                        <i class=\"fa fa-credit-card\"></i>
                        <span>Constatation</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        ";
            // line 315
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
                // line 316
                echo "                            ";
                // line 317
                echo "                            <li class=\"treeview ";
                if (array_key_exists("menu_const_av_ded_type", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                <a href=\"#\">
                                    <i class=\"fa fa-tasks\"></i>
                                    <span>Type</span>
                                    <span class=\"pull-right-container\">
                                        <i class=\"fa fa-angle-left pull-right\"></i>
                                    </span>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li class=\"";
                // line 326
                if (array_key_exists("menu_const_av_ded_type_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                        <a href=\"";
                // line 327
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_const_av_ded_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                    </li>
                                    <li class=\"";
                // line 329
                if (array_key_exists("menu_const_av_ded_type_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                        <a href=\"";
                // line 330
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_const_av_ded_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                    </li>
                                </ul>
                            </li>
                        ";
            }
            // line 335
            echo "
                        ";
            // line 337
            echo "                        <li class=\"treeview ";
            if (array_key_exists("menu_const_av_ded", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-credit-card-alt\"></i>
                                <span>Constatation</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"";
            // line 346
            if (array_key_exists("menu_const_av_ded_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 347
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"";
            // line 349
            if (array_key_exists("menu_const_av_ded_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 350
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            ";
        }
        // line 357
        echo "
            ";
        // line 358
        if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RECEPTION") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STAFF"))) {
            // line 359
            echo "                ";
            // line 360
            echo "                <li class=\"treeview ";
            if (array_key_exists("menu_statistique_constatation", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                    <a href=\"#\">
                        <i class=\"fa fa-bar-chart\"></i>
                        <span>Statistique constatation</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li class=\"";
            // line 369
            if (array_key_exists("menu_statistique_constatation_voir", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                            <a href=\"";
            // line 370
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("statistique_constatation_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Voir</a>
                        </li>
                    </ul>
                </li>
            ";
        }
        // line 375
        echo "
            ";
        // line 376
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
            // line 377
            echo "                ";
            // line 378
            echo "                <li class=\"treeview
                    ";
            // line 379
            if ((((((((((((((((((((array_key_exists("menu_marque", $context) || array_key_exists("menu_centre", $context)) || array_key_exists("menu_province", $context)) ||             // line 380
array_key_exists("menu_motif", $context)) || array_key_exists("menu_genre", $context)) || array_key_exists("menu_carosserie", $context)) ||             // line 381
array_key_exists("menu_energie", $context)) || array_key_exists("menu_verificateur", $context)) || array_key_exists("menu_utilisation", $context)) ||             // line 382
array_key_exists("menu_anomalie", $context)) || array_key_exists("menu_proces_verbal", $context)) || array_key_exists("menu_droit_ptac", $context)) ||             // line 383
array_key_exists("menu_type_droit_ptac", $context)) ||             // line 384
array_key_exists("menu_usage", $context)) || array_key_exists("menu_type_usage", $context)) || array_key_exists("menu_usage_tarif", $context)) ||             // line 385
array_key_exists("menu_genre_categorie", $context)) || array_key_exists("menu_visite_extra", $context)) ||             // line 386
array_key_exists("menu_visite_extra_type", $context)) || array_key_exists("menu_zone_deserte", $context))) {
                // line 387
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                    <a href=\"#\">
                        <i class=\"fa fa-database\"></i>
                        <span>Données de base</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        
                        ";
            // line 397
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
                // line 398
                echo "                        ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
                    // line 399
                    echo "                        ";
                    // line 400
                    echo "                        <li class=\"treeview ";
                    if ((array_key_exists("menu_centre", $context) || array_key_exists("menu_province", $context))) {
                        echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    }
                    echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-map\"></i>
                                <span>Lieux</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                ";
                    // line 410
                    echo "                                <li class=\"treeview ";
                    if (array_key_exists("menu_province", $context)) {
                        echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    }
                    echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-map-pin\"></i>
                                        <span>Province</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
                    // line 419
                    if (array_key_exists("menu_province_list", $context)) {
                        echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    }
                    echo "\">
                                            <a href=\"";
                    // line 420
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_index");
                    echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
                    // line 422
                    if (array_key_exists("menu_province_create", $context)) {
                        echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    }
                    echo "\">
                                            <a href=\"";
                    // line 423
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_new");
                    echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                ";
                    // line 429
                    echo "                                <li class=\"treeview ";
                    if (array_key_exists("menu_centre", $context)) {
                        echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    }
                    echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-map-o\"></i>
                                        <span>Centre</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
                    // line 438
                    if (array_key_exists("menu_centre_list", $context)) {
                        echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    }
                    echo "\">
                                            <a href=\"";
                    // line 439
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("centre_index");
                    echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
                    // line 441
                    if (array_key_exists("menu_centre_create", $context)) {
                        echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    }
                    echo "\">
                                            <a href=\"";
                    // line 442
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("centre_new");
                    echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        ";
                }
                // line 449
                echo "                        ";
            }
            // line 450
            echo "
                        ";
            // line 451
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
                // line 452
                echo "                        ";
                // line 453
                echo "                        <li class=\"treeview ";
                if (array_key_exists("menu_verificateur", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-users\"></i>
                                <span>Vérificateur</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"";
                // line 462
                if (array_key_exists("menu_verificateur_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 463
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verificateur_index");
                echo "\">
                                        <i class=\"fa fa-circle-o\"></i> Liste
                                    </a>
                                </li>
                                <li class=\"";
                // line 467
                if (array_key_exists("menu_verificateur_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 468
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verificateur_new");
                echo "\">
                                        <i class=\"fa fa-circle-o\"></i> Créer
                                    </a>
                                </li>
                            </ul>
                        </li>
                        ";
            }
            // line 475
            echo "
                        ";
            // line 476
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
                // line 477
                echo "                        ";
                // line 478
                echo "                        <li class=\"treeview ";
                if (array_key_exists("menu_marque", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-header\"></i>
                                <span>Marque</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"";
                // line 487
                if (array_key_exists("menu_marque_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 488
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"";
                // line 490
                if (array_key_exists("menu_marque_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 491
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                        ";
            }
            // line 496
            echo "
                        ";
            // line 497
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
                // line 498
                echo "                        ";
                // line 499
                echo "                        <li class=\"treeview ";
                if (array_key_exists("menu_carosserie", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-cog\"></i>
                                <span>Carrosserie</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"";
                // line 508
                if (array_key_exists("menu_carosserie_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 509
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carosserie_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"";
                // line 511
                if (array_key_exists("menu_carosserie_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 512
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carosserie_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                        ";
            }
            // line 517
            echo "
                        ";
            // line 518
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
                // line 519
                echo "                        ";
                // line 520
                echo "                        <li class=\"treeview ";
                if (array_key_exists("menu_energie", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-battery\"></i>
                                <span>Source énergie</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"";
                // line 529
                if (array_key_exists("menu_energie_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 530
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("energie_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"";
                // line 532
                if (array_key_exists("menu_energie_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 533
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("energie_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                        ";
            }
            // line 538
            echo "
                        ";
            // line 539
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
                // line 540
                echo "                        ";
                // line 541
                echo "                        <li class=\"treeview ";
                if (array_key_exists("menu_utilisation", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-hand-rock-o\"></i>
                                <span>Utilisation</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"";
                // line 550
                if (array_key_exists("menu_utilisation_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 551
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisation_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"";
                // line 553
                if (array_key_exists("menu_utilisation_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 554
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisation_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                        ";
            }
            // line 559
            echo "
                        ";
            // line 560
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
                // line 561
                echo "                        ";
                // line 562
                echo "                        <li class=\"treeview ";
                if (array_key_exists("menu_genre", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-clipboard\"></i>
                                <span>Genre</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                ";
                // line 572
                echo "                                <li class=\"treeview ";
                if (array_key_exists("menu_genre_type", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-tasks\"></i>
                                        <span>Type</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
                // line 581
                if (array_key_exists("menu_genre_type_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                            <a href=\"";
                // line 582
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
                // line 584
                if (array_key_exists("menu_genre_type_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                            <a href=\"";
                // line 585
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                ";
                // line 591
                echo "                                <li class=\"treeview ";
                if (array_key_exists("menu_genre_categorie", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-money\"></i>
                                        <span>Categorie</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
                // line 600
                if (array_key_exists("menu_genre_categorie_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                            <a href=\"";
                // line 601
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_categorie_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
                // line 603
                if (array_key_exists("menu_genre_categorie_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                            <a href=\"";
                // line 604
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_categorie_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        ";
            }
            // line 611
            echo "
                        ";
            // line 612
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
                // line 613
                echo "                        ";
                // line 614
                echo "                        <li class=\"treeview ";
                if (array_key_exists("menu_visite_extra", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-server\"></i>
                                <span>Visite extra</span>
                                <span class=\"pull-right-container\">
                                        <i class=\"fa fa-angle-left pull-right\"></i>
                                    </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                ";
                // line 624
                echo "                                <li class=\"treeview ";
                if (array_key_exists("menu_visite_extra_type", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-tasks\"></i>
                                        <span>Type</span>
                                        <span class=\"pull-right-container\">
                                                <i class=\"fa fa-angle-left pull-right\"></i>
                                            </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
                // line 633
                if (array_key_exists("menu_visite_extra_type_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                            <a href=\"";
                // line 634
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
                // line 636
                if (array_key_exists("menu_visite_extra_type_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                            <a href=\"";
                // line 637
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                ";
                // line 643
                echo "                                <li class=\"treeview ";
                if (array_key_exists("menu_visite_extra_tarif", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-money\"></i>
                                        <span>Tarif</span>
                                        <span class=\"pull-right-container\">
                                                <i class=\"fa fa-angle-left pull-right\"></i>
                                            </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
                // line 652
                if (array_key_exists("menu_visite_extra_tarif_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                            <a href=\"";
                // line 653
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_tarif_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
                // line 655
                if (array_key_exists("menu_visite_extra_tarif_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                            <a href=\"";
                // line 656
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_tarif_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        ";
            }
            // line 663
            echo "
                        ";
            // line 664
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
                // line 665
                echo "                        ";
                // line 666
                echo "                        <li class=\"treeview ";
                if (array_key_exists("menu_motif", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-newspaper-o\"></i>
                                <span>Motif</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                ";
                // line 676
                echo "                                <li class=\"treeview ";
                if (array_key_exists("menu_motif_type", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-tasks\"></i>
                                        <span>Type</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
                // line 685
                if (array_key_exists("menu_motif_type_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                            <a href=\"";
                // line 686
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
                // line 688
                if (array_key_exists("menu_motif_type_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                            <a href=\"";
                // line 689
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                ";
                // line 695
                echo "                                <li class=\"treeview ";
                if (array_key_exists("menu_motif_tarif", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-money\"></i>
                                        <span>Tarif</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
                // line 704
                if (array_key_exists("menu_motif_tarif_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                            <a href=\"";
                // line 705
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_tarif_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
                // line 707
                if (array_key_exists("menu_motif_tarif_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                            <a href=\"";
                // line 708
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_tarif_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        ";
            }
            // line 715
            echo "
                        ";
            // line 716
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
                // line 717
                echo "                        ";
                // line 718
                echo "                        <li class=\"treeview ";
                if (((array_key_exists("menu_type_usage", $context) || array_key_exists("menu_usage", $context)) || array_key_exists("menu_usage_tarif", $context))) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-hand-lizard-o\"></i>
                                <span>Usage</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                ";
                // line 728
                echo "                                <li class=\"treeview ";
                if (array_key_exists("menu_type_usage", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-tasks\"></i>
                                        <span>Type</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
                // line 737
                if (array_key_exists("menu_type_usage_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                            <a href=\"";
                // line 738
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_usage_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
                // line 740
                if (array_key_exists("menu_type_usage_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                            <a href=\"";
                // line 741
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_usage_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                ";
                // line 747
                echo "                                <li class=\"treeview ";
                if (array_key_exists("menu_usage", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-hand-paper-o\"></i>
                                        <span>Usage</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
                // line 756
                if (array_key_exists("menu_usage_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                            <a href=\"";
                // line 757
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usage_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
                // line 759
                if (array_key_exists("menu_usage_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                            <a href=\"";
                // line 760
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usage_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                ";
                // line 766
                echo "                                <li class=\"treeview ";
                if (array_key_exists("menu_usage_tarif", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-money\"></i>
                                        <span>Tarif</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
                // line 775
                if (array_key_exists("menu_usage_tarif_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                            <a href=\"";
                // line 776
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usage_tarif_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
                // line 778
                if (array_key_exists("menu_usage_tarif_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                            <a href=\"";
                // line 779
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usage_tarif_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        ";
            }
            // line 786
            echo "
                        ";
            // line 787
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
                // line 788
                echo "                        ";
                // line 789
                echo "                        <li class=\"treeview ";
                if (array_key_exists("menu_anomalie", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-ambulance\"></i>
                                <span>Anomalie</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                ";
                // line 799
                echo "                                <li class=\"treeview ";
                if (array_key_exists("menu_type_anomalie", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-tasks\"></i>
                                        <span>Type</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
                // line 808
                if (array_key_exists("menu_type_anomalie_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                            <a href=\"";
                // line 809
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_anomalie_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
                // line 811
                if (array_key_exists("menu_type_anomalie_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                            <a href=\"";
                // line 812
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_anomalie_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                ";
                // line 818
                echo "                                <li class=\"treeview ";
                if (array_key_exists("menu_anomalie", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-wrench\"></i>
                                        <span>Anomalie</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
                // line 827
                if (array_key_exists("menu_anomalie_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                            <a href=\"";
                // line 828
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("anomalie_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
                // line 830
                if (array_key_exists("menu_anomalie_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                            <a href=\"";
                // line 831
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("anomalie_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        ";
            }
            // line 838
            echo "
                        ";
            // line 839
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
                // line 840
                echo "                        ";
                // line 841
                echo "                        <li class=\"treeview ";
                if (array_key_exists("menu_proces_verbal", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-bank\"></i>
                                <span>Proces Verbal</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"";
                // line 850
                if (array_key_exists("menu_proces_verbal_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 851
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proces_verbal_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"";
                // line 853
                if (array_key_exists("menu_proces_verbal_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 854
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proces_verbal_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                        ";
            }
            // line 859
            echo "
                        ";
            // line 860
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
                // line 861
                echo "                        ";
                // line 862
                echo "                        <li class=\"treeview ";
                if ((array_key_exists("menu_droit_ptac", $context) || array_key_exists("menu_type_droit_ptac", $context))) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-balance-scale\"></i>
                                <span>Droit Ptac</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                ";
                // line 872
                echo "                                <li class=\"treeview ";
                if (array_key_exists("menu_type_droit_ptac", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-tasks\"></i>
                                        <span>Type</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
                // line 881
                if (array_key_exists("menu_type_droit_ptac_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                            <a href=\"";
                // line 882
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_droit_ptac_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
                // line 884
                if (array_key_exists("menu_type_droit_ptac_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                            <a href=\"";
                // line 885
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_droit_ptac_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                ";
                // line 891
                echo "                                <li class=\"treeview ";
                if (array_key_exists("menu_droit_ptac", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-wrench\"></i>
                                        <span>Droit</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
                // line 900
                if (array_key_exists("menu_droit_ptac_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                            <a href=\"";
                // line 901
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("droit_ptac_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
                // line 903
                if (array_key_exists("menu_droit_ptac_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                            <a href=\"";
                // line 904
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("droit_ptac_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        ";
            }
            // line 911
            echo "
                        ";
            // line 912
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
                // line 913
                echo "                        ";
                // line 914
                echo "                        <li class=\"treeview ";
                if (array_key_exists("menu_zone_deserte", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-map-signs\"></i>
                                <span>Zone de déserte</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"";
                // line 923
                if (array_key_exists("menu_zone_deserte_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 924
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_deserte_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"";
                // line 926
                if (array_key_exists("menu_zone_deserte_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 927
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_deserte_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                        ";
            }
            // line 932
            echo "                    </ul>
                </li>
            ";
        }
        // line 935
        echo "

            ";
        // line 937
        if ((((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_APPROVISIONNEMENT")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RECEPTION")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_VISITE"))) {
            // line 938
            echo "                ";
            // line 939
            echo "                ";
            // line 940
            echo "                <li class=\"treeview ";
            if (array_key_exists("menu_bordereau", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                    <a href=\"#\">
                        <i class=\"fa fa-shopping-basket\"></i>
                        <span>Imprimés techniques</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        ";
            // line 949
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 950
                echo "                        ";
                // line 951
                echo "                        <li class=\"treeview ";
                if (array_key_exists("menu_bordereau", $context)) {
                    if (array_key_exists("menu_bordereau_activation", $context)) {
                        echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    }
                }
                echo "\">
                            <a href=\"";
                // line 952
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bordereau_activation");
                echo "\"><i class=\"fa fa-check-circle\"></i> Activer des imprimés</a>
                        </li>
                        ";
            }
            // line 955
            echo "
                        ";
            // line 956
            if (((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RECEPTION")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_VISITE")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_APPROVISIONNEMENT"))) {
                // line 957
                echo "                        ";
                // line 958
                echo "                        <li class=\"treeview ";
                if (array_key_exists("menu_imprime_tech_use", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-archive\"></i>
                                <span>Utilisation IT</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                ";
                // line 967
                if (((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RECEPTION")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_VISITE")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_APPROVISIONNEMENT"))) {
                    // line 968
                    echo "                                <li class=\"";
                    if (array_key_exists("menu_imprime_tech_use_list", $context)) {
                        echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    }
                    echo "\">
                                    <a href=\"";
                    // line 969
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_index");
                    echo "\"><i class=\"fa fa-search\"></i> Liste des IT utilisés</a>
                                </li>
                                ";
                }
                // line 972
                echo "                                ";
                if (((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RECEPTION")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_VISITE")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_APPROVISIONNEMENT"))) {
                    // line 973
                    echo "                                ";
                    if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RECEPTION") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_VISITE"))) {
                        // line 974
                        echo "                                <li class=\"";
                        if (array_key_exists("menu_imprime_tech_use_search", $context)) {
                            echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                        }
                        echo "\">
                                    <a href=\"";
                        // line 975
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_new");
                        echo "\"><i class=\"fa fa-list-ol\"></i> Mise à jour multiple IT</a>
                                </li>
                                <li class=\"";
                        // line 977
                        if (array_key_exists("menu_imprime_tech_use_search", $context)) {
                            echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                        }
                        echo "\">
                                    <a href=\"";
                        // line 978
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_search");
                        echo "\"><i class=\"fa fa-list-ol\"></i> Mise à jour utilisation IT</a>
                                </li>
                                ";
                    }
                    // line 981
                    echo "                                <li class=\"";
                    if (array_key_exists("menu_imprime_tech_use_stat", $context)) {
                        echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    }
                    echo "\">
                                    <a href=\"";
                    // line 982
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprimes_tech_use_statistic");
                    echo "\"><i class=\"fa fa-bar-chart\"></i> Statistique utilisation IT</a>
                                </li>
                                ";
                }
                // line 985
                echo "                            </ul>
                        </li>
                        ";
            }
            // line 988
            echo "
                        ";
            // line 989
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_APPROVISIONNEMENT")) {
                // line 990
                echo "                        ";
                // line 991
                echo "                        <li class=\"treeview ";
                if (array_key_exists("menu_bordereau", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-archive\"></i>
                                <span>Bordereau d'envoi</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"";
                // line 1000
                if (array_key_exists("menu_bordereau_search", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 1001
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bordereau_search");
                echo "\"><i class=\"fa fa-search\"></i> Rechercher</a>
                                </li>
                                <li class=\"";
                // line 1003
                if (array_key_exists("menu_bordereau_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 1004
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bordereau_index");
                echo "\"><i class=\"fa fa-list-ol\"></i> Liste</a>
                                </li>
                                <li class=\"";
                // line 1006
                if (array_key_exists("menu_bordereau_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 1007
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bordereau_new");
                echo "\"><i class=\"fa fa-plus\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                        ";
            }
            // line 1012
            echo "
                        ";
            // line 1013
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
                // line 1014
                echo "                        ";
                // line 1015
                echo "                        <li class=\"treeview ";
                if (array_key_exists("menu_imprime_tech", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-print\"></i>
                                <span>Imprimés techniques</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"";
                // line 1024
                if (array_key_exists("menu_imprime_tech_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 1025
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"";
                // line 1027
                if (array_key_exists("menu_imprime_tech_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 1028
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                        ";
            }
            // line 1033
            echo "                    </ul>
                </li>
            ";
        }
        // line 1036
        echo "        </ul>
    </section>
</aside>
";
    }

    public function getTemplateName()
    {
        return "backoffice/base_admin_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2140 => 1036,  2135 => 1033,  2127 => 1028,  2121 => 1027,  2116 => 1025,  2110 => 1024,  2095 => 1015,  2093 => 1014,  2091 => 1013,  2088 => 1012,  2080 => 1007,  2074 => 1006,  2069 => 1004,  2063 => 1003,  2058 => 1001,  2052 => 1000,  2037 => 991,  2035 => 990,  2033 => 989,  2030 => 988,  2025 => 985,  2019 => 982,  2012 => 981,  2006 => 978,  2000 => 977,  1995 => 975,  1988 => 974,  1985 => 973,  1982 => 972,  1976 => 969,  1969 => 968,  1967 => 967,  1952 => 958,  1950 => 957,  1948 => 956,  1945 => 955,  1939 => 952,  1930 => 951,  1928 => 950,  1926 => 949,  1911 => 940,  1909 => 939,  1907 => 938,  1905 => 937,  1901 => 935,  1896 => 932,  1888 => 927,  1882 => 926,  1877 => 924,  1871 => 923,  1856 => 914,  1854 => 913,  1852 => 912,  1849 => 911,  1839 => 904,  1833 => 903,  1828 => 901,  1822 => 900,  1807 => 891,  1799 => 885,  1793 => 884,  1788 => 882,  1782 => 881,  1767 => 872,  1752 => 862,  1750 => 861,  1748 => 860,  1745 => 859,  1737 => 854,  1731 => 853,  1726 => 851,  1720 => 850,  1705 => 841,  1703 => 840,  1701 => 839,  1698 => 838,  1688 => 831,  1682 => 830,  1677 => 828,  1671 => 827,  1656 => 818,  1648 => 812,  1642 => 811,  1637 => 809,  1631 => 808,  1616 => 799,  1601 => 789,  1599 => 788,  1597 => 787,  1594 => 786,  1584 => 779,  1578 => 778,  1573 => 776,  1567 => 775,  1552 => 766,  1544 => 760,  1538 => 759,  1533 => 757,  1527 => 756,  1512 => 747,  1504 => 741,  1498 => 740,  1493 => 738,  1487 => 737,  1472 => 728,  1457 => 718,  1455 => 717,  1453 => 716,  1450 => 715,  1440 => 708,  1434 => 707,  1429 => 705,  1423 => 704,  1408 => 695,  1400 => 689,  1394 => 688,  1389 => 686,  1383 => 685,  1368 => 676,  1353 => 666,  1351 => 665,  1349 => 664,  1346 => 663,  1336 => 656,  1330 => 655,  1325 => 653,  1319 => 652,  1304 => 643,  1296 => 637,  1290 => 636,  1285 => 634,  1279 => 633,  1264 => 624,  1249 => 614,  1247 => 613,  1245 => 612,  1242 => 611,  1232 => 604,  1226 => 603,  1221 => 601,  1215 => 600,  1200 => 591,  1192 => 585,  1186 => 584,  1181 => 582,  1175 => 581,  1160 => 572,  1145 => 562,  1143 => 561,  1141 => 560,  1138 => 559,  1130 => 554,  1124 => 553,  1119 => 551,  1113 => 550,  1098 => 541,  1096 => 540,  1094 => 539,  1091 => 538,  1083 => 533,  1077 => 532,  1072 => 530,  1066 => 529,  1051 => 520,  1049 => 519,  1047 => 518,  1044 => 517,  1036 => 512,  1030 => 511,  1025 => 509,  1019 => 508,  1004 => 499,  1002 => 498,  1000 => 497,  997 => 496,  989 => 491,  983 => 490,  978 => 488,  972 => 487,  957 => 478,  955 => 477,  953 => 476,  950 => 475,  940 => 468,  934 => 467,  927 => 463,  921 => 462,  906 => 453,  904 => 452,  902 => 451,  899 => 450,  896 => 449,  886 => 442,  880 => 441,  875 => 439,  869 => 438,  854 => 429,  846 => 423,  840 => 422,  835 => 420,  829 => 419,  814 => 410,  799 => 400,  797 => 399,  794 => 398,  792 => 397,  778 => 387,  776 => 386,  775 => 385,  774 => 384,  773 => 383,  772 => 382,  771 => 381,  770 => 380,  769 => 379,  766 => 378,  764 => 377,  762 => 376,  759 => 375,  751 => 370,  745 => 369,  730 => 360,  728 => 359,  726 => 358,  723 => 357,  713 => 350,  707 => 349,  702 => 347,  696 => 346,  681 => 337,  678 => 335,  670 => 330,  664 => 329,  659 => 327,  653 => 326,  638 => 317,  636 => 316,  634 => 315,  619 => 306,  617 => 305,  615 => 304,  612 => 303,  604 => 298,  598 => 297,  583 => 288,  581 => 287,  579 => 286,  576 => 285,  566 => 278,  559 => 277,  557 => 276,  555 => 275,  540 => 265,  532 => 259,  526 => 258,  521 => 256,  514 => 255,  512 => 254,  510 => 253,  495 => 243,  487 => 237,  480 => 236,  478 => 235,  476 => 234,  461 => 224,  458 => 222,  450 => 217,  444 => 216,  439 => 214,  433 => 213,  418 => 204,  416 => 203,  414 => 202,  399 => 193,  397 => 192,  395 => 191,  392 => 190,  384 => 185,  378 => 184,  363 => 175,  361 => 174,  359 => 173,  356 => 172,  346 => 165,  340 => 164,  335 => 162,  329 => 161,  324 => 159,  318 => 158,  303 => 149,  300 => 147,  292 => 142,  286 => 141,  281 => 139,  275 => 138,  260 => 129,  258 => 128,  256 => 127,  241 => 118,  239 => 117,  237 => 116,  234 => 115,  217 => 101,  211 => 100,  196 => 91,  194 => 90,  191 => 89,  188 => 87,  183 => 84,  175 => 79,  169 => 78,  164 => 76,  158 => 75,  143 => 66,  141 => 65,  139 => 64,  134 => 61,  128 => 58,  121 => 57,  119 => 56,  114 => 54,  108 => 53,  93 => 44,  83 => 36,  77 => 35,  62 => 26,  45 => 14,  43 => 13,  41 => 12,  33 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "backoffice/base_admin_sidebar.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\app\\Resources\\views\\backoffice\\base_admin_sidebar.html.twig");
    }
}
