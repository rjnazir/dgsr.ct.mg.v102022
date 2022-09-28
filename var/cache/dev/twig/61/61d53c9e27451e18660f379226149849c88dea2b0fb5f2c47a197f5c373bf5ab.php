<?php

/* :backoffice:base_admin_sidebar.html.twig */
class __TwigTemplate_88739765ad204bba09e322927000703251236264c6e42e631757814f37c08db9 extends Twig_Template
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
        $__internal_aef3f2d20bc0caf7b01515aeadb5eeba6ddeb0e007bec6586423b806ed098a42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aef3f2d20bc0caf7b01515aeadb5eeba6ddeb0e007bec6586423b806ed098a42->enter($__internal_aef3f2d20bc0caf7b01515aeadb5eeba6ddeb0e007bec6586423b806ed098a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backoffice:base_admin_sidebar.html.twig"));

        $__internal_7ea1853df77dffd8b31e6491e266209f13d811a833dd6076d479881c414670dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea1853df77dffd8b31e6491e266209f13d811a833dd6076d479881c414670dc->enter($__internal_7ea1853df77dffd8b31e6491e266209f13d811a833dd6076d479881c414670dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backoffice:base_admin_sidebar.html.twig"));

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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                        echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                        echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                        echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                        echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                        echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                        echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                        echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                        echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                        echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                            echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                            echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                        echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
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
        
        $__internal_aef3f2d20bc0caf7b01515aeadb5eeba6ddeb0e007bec6586423b806ed098a42->leave($__internal_aef3f2d20bc0caf7b01515aeadb5eeba6ddeb0e007bec6586423b806ed098a42_prof);

        
        $__internal_7ea1853df77dffd8b31e6491e266209f13d811a833dd6076d479881c414670dc->leave($__internal_7ea1853df77dffd8b31e6491e266209f13d811a833dd6076d479881c414670dc_prof);

    }

    public function getTemplateName()
    {
        return ":backoffice:base_admin_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2146 => 1036,  2141 => 1033,  2133 => 1028,  2127 => 1027,  2122 => 1025,  2116 => 1024,  2101 => 1015,  2099 => 1014,  2097 => 1013,  2094 => 1012,  2086 => 1007,  2080 => 1006,  2075 => 1004,  2069 => 1003,  2064 => 1001,  2058 => 1000,  2043 => 991,  2041 => 990,  2039 => 989,  2036 => 988,  2031 => 985,  2025 => 982,  2018 => 981,  2012 => 978,  2006 => 977,  2001 => 975,  1994 => 974,  1991 => 973,  1988 => 972,  1982 => 969,  1975 => 968,  1973 => 967,  1958 => 958,  1956 => 957,  1954 => 956,  1951 => 955,  1945 => 952,  1936 => 951,  1934 => 950,  1932 => 949,  1917 => 940,  1915 => 939,  1913 => 938,  1911 => 937,  1907 => 935,  1902 => 932,  1894 => 927,  1888 => 926,  1883 => 924,  1877 => 923,  1862 => 914,  1860 => 913,  1858 => 912,  1855 => 911,  1845 => 904,  1839 => 903,  1834 => 901,  1828 => 900,  1813 => 891,  1805 => 885,  1799 => 884,  1794 => 882,  1788 => 881,  1773 => 872,  1758 => 862,  1756 => 861,  1754 => 860,  1751 => 859,  1743 => 854,  1737 => 853,  1732 => 851,  1726 => 850,  1711 => 841,  1709 => 840,  1707 => 839,  1704 => 838,  1694 => 831,  1688 => 830,  1683 => 828,  1677 => 827,  1662 => 818,  1654 => 812,  1648 => 811,  1643 => 809,  1637 => 808,  1622 => 799,  1607 => 789,  1605 => 788,  1603 => 787,  1600 => 786,  1590 => 779,  1584 => 778,  1579 => 776,  1573 => 775,  1558 => 766,  1550 => 760,  1544 => 759,  1539 => 757,  1533 => 756,  1518 => 747,  1510 => 741,  1504 => 740,  1499 => 738,  1493 => 737,  1478 => 728,  1463 => 718,  1461 => 717,  1459 => 716,  1456 => 715,  1446 => 708,  1440 => 707,  1435 => 705,  1429 => 704,  1414 => 695,  1406 => 689,  1400 => 688,  1395 => 686,  1389 => 685,  1374 => 676,  1359 => 666,  1357 => 665,  1355 => 664,  1352 => 663,  1342 => 656,  1336 => 655,  1331 => 653,  1325 => 652,  1310 => 643,  1302 => 637,  1296 => 636,  1291 => 634,  1285 => 633,  1270 => 624,  1255 => 614,  1253 => 613,  1251 => 612,  1248 => 611,  1238 => 604,  1232 => 603,  1227 => 601,  1221 => 600,  1206 => 591,  1198 => 585,  1192 => 584,  1187 => 582,  1181 => 581,  1166 => 572,  1151 => 562,  1149 => 561,  1147 => 560,  1144 => 559,  1136 => 554,  1130 => 553,  1125 => 551,  1119 => 550,  1104 => 541,  1102 => 540,  1100 => 539,  1097 => 538,  1089 => 533,  1083 => 532,  1078 => 530,  1072 => 529,  1057 => 520,  1055 => 519,  1053 => 518,  1050 => 517,  1042 => 512,  1036 => 511,  1031 => 509,  1025 => 508,  1010 => 499,  1008 => 498,  1006 => 497,  1003 => 496,  995 => 491,  989 => 490,  984 => 488,  978 => 487,  963 => 478,  961 => 477,  959 => 476,  956 => 475,  946 => 468,  940 => 467,  933 => 463,  927 => 462,  912 => 453,  910 => 452,  908 => 451,  905 => 450,  902 => 449,  892 => 442,  886 => 441,  881 => 439,  875 => 438,  860 => 429,  852 => 423,  846 => 422,  841 => 420,  835 => 419,  820 => 410,  805 => 400,  803 => 399,  800 => 398,  798 => 397,  784 => 387,  782 => 386,  781 => 385,  780 => 384,  779 => 383,  778 => 382,  777 => 381,  776 => 380,  775 => 379,  772 => 378,  770 => 377,  768 => 376,  765 => 375,  757 => 370,  751 => 369,  736 => 360,  734 => 359,  732 => 358,  729 => 357,  719 => 350,  713 => 349,  708 => 347,  702 => 346,  687 => 337,  684 => 335,  676 => 330,  670 => 329,  665 => 327,  659 => 326,  644 => 317,  642 => 316,  640 => 315,  625 => 306,  623 => 305,  621 => 304,  618 => 303,  610 => 298,  604 => 297,  589 => 288,  587 => 287,  585 => 286,  582 => 285,  572 => 278,  565 => 277,  563 => 276,  561 => 275,  546 => 265,  538 => 259,  532 => 258,  527 => 256,  520 => 255,  518 => 254,  516 => 253,  501 => 243,  493 => 237,  486 => 236,  484 => 235,  482 => 234,  467 => 224,  464 => 222,  456 => 217,  450 => 216,  445 => 214,  439 => 213,  424 => 204,  422 => 203,  420 => 202,  405 => 193,  403 => 192,  401 => 191,  398 => 190,  390 => 185,  384 => 184,  369 => 175,  367 => 174,  365 => 173,  362 => 172,  352 => 165,  346 => 164,  341 => 162,  335 => 161,  330 => 159,  324 => 158,  309 => 149,  306 => 147,  298 => 142,  292 => 141,  287 => 139,  281 => 138,  266 => 129,  264 => 128,  262 => 127,  247 => 118,  245 => 117,  243 => 116,  240 => 115,  223 => 101,  217 => 100,  202 => 91,  200 => 90,  197 => 89,  194 => 87,  189 => 84,  181 => 79,  175 => 78,  170 => 76,  164 => 75,  149 => 66,  147 => 65,  145 => 64,  140 => 61,  134 => 58,  127 => 57,  125 => 56,  120 => 54,  114 => 53,  99 => 44,  89 => 36,  83 => 35,  68 => 26,  51 => 14,  49 => 13,  47 => 12,  39 => 7,  33 => 6,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set active = 'active' %}

<aside class=\"main-sidebar\">
    <section class=\"sidebar\">
        <ul class=\"sidebar-menu\">
            <li class=\"{% if menu_dashboard is defined %}active{% endif %} treeview\">
                <a href=\"{{ path('dashboard_index') }}\">
                    <i class=\"fa fa-dashboard\"></i> <span>Tableau de bord</span>
                </a>
            </li>

            {% if is_granted('ROLE_ADMIN') %}
                {# Utilisateur #}
                <li class=\"treeview {% if menu_user is defined or menu_role is defined %}{{ active }}{% endif %}\">
                    <a href=\"#\">
                        <i class=\"fa fa-users\"></i>
                        <span>Administrateur</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>

                    <ul class=\"treeview-menu\">

                        {# Vérificateur #}
                        <li class=\"treeview {% if menu_verificateur is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-users\"></i>
                                <span>Vérificateur</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"{% if menu_verificateur_list is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('verificateur_index')}}\">
                                        <i class=\"fa fa-circle-o\"></i> Liste
                                    </a>
                                </li>
                            </ul>
                        </li>

                        {# Utilisateur #}
                        <li class=\"treeview {% if menu_user is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-user\"></i>
                                <span>Utilisateur</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"{% if menu_user_list is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('user_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                {% if is_granted('ROLE_SUPERADMIN') %}
                                <li class=\"{% if menu_user_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('user_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                                {% endif %}
                            </ul>
                        </li>

                        {% if is_granted('ROLE_SUPERADMIN') %}
                            {# Rôle #}
                            <li class=\"treeview {% if menu_role is defined %}{{ active }}{% endif %}\">
                                <a href=\"#\">
                                    <i class=\"fa fa-balance-scale\"></i>
                                    <span>Rôle</span>
                                    <span class=\"pull-right-container\">
                                        <i class=\"fa fa-angle-left pull-right\"></i>
                                    </span>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li class=\"{% if menu_role_list is defined %}{{ active }}{% endif %}\">
                                        <a href=\"{{ path('role_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                    </li>
                                    <li class=\"{% if menu_role_create is defined %}{{ active }}{% endif %}\">
                                        <a href=\"{{ path('role_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                    </li>
                                </ul>
                            </li>
                        {% endif %}
                    </ul>
                </li>
            {% endif %}

            {# {% if is_granted('ROLE_SUPERADMIN') or is_granted('ROLE_STAFF') %} #}
\t        {% if is_granted('ROLE_SUPERADMIN') or is_granted('ROLE_STAFF') or ('ROLE_VISITE') or ('ROLE_RECEPTION')%}
                {# Historique #}
                <li class=\"treeview {% if menu_historique is defined %}{{ active }}{% endif %}\">
                    <a href=\"#\">
                        <i class=\"fa fa-archive\"></i>
                        <span>Historique</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li class=\"{% if menu_historique_list is defined %}{{ active }}{% endif %}\">
                            <a href=\"{{ path('historique_index') }}\"><i class=\"fa fa-circle-o\"></i> Voir</a>
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
            {% endif %}

            {% if (is_granted('ROLE_RECEPTION') or is_granted('ROLE_ADMIN')) %}
                {# Réception #}
                <li class=\"treeview {% if menu_reception is defined %}{{ active }}{% endif %}\">
                    <a href=\"#\">
                        <i class=\"fa fa-download\"></i>
                        <span>Réception</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        {% if is_granted('ROLE_SUPERADMIN') %}
                            {# Type #}
                            <li class=\"treeview {% if menu_type_reception is defined %}{{ active }}{% endif %}\">
                                <a href=\"#\">
                                    <i class=\"fa fa-tasks\"></i>
                                    <span>Type</span>
                                    <span class=\"pull-right-container\">
                                        <i class=\"fa fa-angle-left pull-right\"></i>
                                    </span>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li class=\"{% if menu_type_reception_list is defined %}{{ active }}{% endif %}\">
                                        <a href=\"{{ path('type_reception_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                    </li>
                                    <li class=\"{% if menu_type_reception_create is defined %}{{ active }}{% endif %}\">
                                        <a href=\"{{ path('type_reception_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                    </li>
                                </ul>
                            </li>
                        {% endif %}

                        {# Réception #}
                        <li class=\"treeview {% if menu_reception is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-caret-square-o-down\"></i>
                                <span>Réception</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"{% if menu_reception_create_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('reception_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                                <li class=\"{% if menu_reception_duplicata is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('reception_duplicata') }}\"><i class=\"fa fa-circle-o\"></i> Duplicata</a>
                                </li>
                                <li class=\"{% if menu_reception_search is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('reception_search') }}\"><i class=\"fa fa-circle-o\"></i> Rechercher</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            {% endif %}

            {% if (is_granted('ROLE_RECEPTION') or is_granted('ROLE_ADMIN') or is_granted('ROLE_STAFF')) %}
                {# Statistique réception #}
                <li class=\"treeview {% if menu_statistique_reception is defined %}{{ active }}{% endif %}\">
                    <a href=\"#\">
                        <i class=\"fa fa-bar-chart\"></i>
                        <span>Statistique réception</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li class=\"{% if menu_statistique_reception_voir is defined %}{{ active }}{% endif %}\">
                            <a href=\"{{ path('statistique_reception_index') }}\"><i class=\"fa fa-circle-o\"></i> Voir</a>
                        </li>
                    </ul>
                </li>
            {% endif %}

            {% if (is_granted('ROLE_VISITE') or is_granted('ROLE_ADMIN')) %}
                {# Visite #}
                <li class=\"treeview {% if menu_carte_grise is defined or menu_visite is defined or menu_contre_visite is defined %}{{ active }}{% endif %}\">
                    <a href=\"#\">
                        <i class=\"fa fa-stethoscope\"></i>
                        <span>Visite technique</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        {% if is_granted('ROLE_SUPERADMIN') %}
                            {# Type de visite #}
                            <li class=\"treeview {% if menu_type_visite is defined %}{{ active }}{% endif %}\">
                                <a href=\"#\">
                                    <i class=\"fa fa-tasks\"></i>
                                    <span>Type</span>
                                    <span class=\"pull-right-container\">
                                        <i class=\"fa fa-angle-left pull-right\"></i>
                                    </span>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li class=\"{% if menu_type_visite_list is defined %}{{ active }}{% endif %}\">
                                        <a href=\"{{ path('type_visite_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                    </li>
                                    <li class=\"{% if menu_type_visite_create is defined %}{{ active }}{% endif %}\">
                                        <a href=\"{{ path('type_visite_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                    </li>
                                </ul>
                            </li>
                        {% endif %}

                        {# Carte grise #}
                        <li class=\"treeview {% if menu_carte_grise is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-address-card-o\"></i>
                                <span>Renseignements véhicule</span>
                                <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                {#<li class=\"{% if menu_carte_grise_list is defined %}{{ active }}{% endif %}\">#}
                                {#<a href=\"{{ path('carte_grise_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>#}
                                {#</li>#}
                                <li class=\"{% if menu_carte_grise_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('carte_grise_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>

                        {# Visite #}
                        <li class=\"treeview {% if menu_visite is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-address-card\"></i>
                                <span>Visite</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                {#<li class=\"{% if menu_visite_list is defined %}{{ active }}{% endif %}\">#}
                                {#<a href=\"{{ path('visite_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>#}
                                {#</li>#}
                                <li class=\"{% if menu_visite_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('visite_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                                <li class=\"{% if menu_visite_search is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('visite_search') }}\"><i class=\"fa fa-circle-o\"></i> Rechercher</a>
                                </li>
                            </ul>
                        </li>

                        {# Contre visite #}
                        <li class=\"treeview {% if menu_contre_visite is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-times-rectangle\"></i>
                                <span>Contre visite</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                {#<li class=\"{% if menu_visite_list is defined %}{{ active }}{% endif %}\">#}
                                {#<a href=\"{{ path('visite_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>#}
                                {#</li>#}
                                <li class=\"{% if menu_contre_visite_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('contre_visite_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            {% endif %}

            {% if (is_granted('ROLE_VISITE') or is_granted('ROLE_ADMIN') or is_granted('ROLE_STAFF')) %}
                {# Statistique visite #}
                <li class=\"treeview {% if menu_statistique_visite is defined %}{{ active }}{% endif %}\">
                    <a href=\"#\">
                        <i class=\"fa fa-bar-chart\"></i>
                        <span>Statistique visite</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li class=\"{% if menu_statistique_visite_create is defined %}{{ active }}{% endif %}\">
                            <a href=\"{{ path('statistique_visite_index') }}\"><i class=\"fa fa-circle-o\"></i> Voir</a>
                        </li>
                    </ul>
                </li>
            {% endif %}

            {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_RECEPTION') %}
                {# Constatation #}
                <li class=\"treeview {% if menu_const_av_ded is defined or menu_const_av_ded_type is defined %}{{ active }}{% endif %}\">
                    <a href=\"#\">
                        <i class=\"fa fa-credit-card\"></i>
                        <span>Constatation</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        {% if is_granted('ROLE_SUPERADMIN') %}
                            {# Type #}
                            <li class=\"treeview {% if menu_const_av_ded_type is defined %}{{ active }}{% endif %}\">
                                <a href=\"#\">
                                    <i class=\"fa fa-tasks\"></i>
                                    <span>Type</span>
                                    <span class=\"pull-right-container\">
                                        <i class=\"fa fa-angle-left pull-right\"></i>
                                    </span>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li class=\"{% if menu_const_av_ded_type_list is defined %}{{ active }}{% endif %}\">
                                        <a href=\"{{ path('type_const_av_ded_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                    </li>
                                    <li class=\"{% if menu_const_av_ded_type_create is defined %}{{ active }}{% endif %}\">
                                        <a href=\"{{ path('type_const_av_ded_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                    </li>
                                </ul>
                            </li>
                        {% endif %}

                        {# Constatation #}
                        <li class=\"treeview {% if menu_const_av_ded is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-credit-card-alt\"></i>
                                <span>Constatation</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"{% if menu_const_av_ded_list is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('const_av_ded_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"{% if menu_const_av_ded_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('const_av_ded_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            {% endif %}

            {% if (is_granted('ROLE_RECEPTION') or is_granted('ROLE_ADMIN') or is_granted('ROLE_STAFF')) %}
                {# Statistique constatation #}
                <li class=\"treeview {% if menu_statistique_constatation is defined %}{{ active }}{% endif %}\">
                    <a href=\"#\">
                        <i class=\"fa fa-bar-chart\"></i>
                        <span>Statistique constatation</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li class=\"{% if menu_statistique_constatation_voir is defined %}{{ active }}{% endif %}\">
                            <a href=\"{{ path('statistique_constatation_index') }}\"><i class=\"fa fa-circle-o\"></i> Voir</a>
                        </li>
                    </ul>
                </li>
            {% endif %}

            {% if is_granted('ROLE_SUPERADMIN') %}
                {# Données de base #}
                <li class=\"treeview
                    {% if menu_marque is defined or menu_centre is defined or menu_province is defined
                        or menu_motif is defined or menu_genre is defined or menu_carosserie is defined
                        or menu_energie is defined or  menu_verificateur is defined or menu_utilisation is defined
                        or menu_anomalie is defined or menu_proces_verbal is defined or menu_droit_ptac is defined
                        or menu_type_droit_ptac is defined
                        or menu_usage is defined or menu_type_usage is defined or menu_usage_tarif is defined
                        or menu_genre_categorie is defined or menu_visite_extra is defined
                        or menu_visite_extra_type is defined or menu_zone_deserte is defined
                    %}{{ active }}{% endif %}\">
                    <a href=\"#\">
                        <i class=\"fa fa-database\"></i>
                        <span>Données de base</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        
                        {% if is_granted('ROLE_SUPERADMIN') or is_granted('ROLE_ADMIN') %}
                        {% if is_granted('ROLE_SUPERADMIN') %}
                        {# Lieux #}
                        <li class=\"treeview {% if menu_centre is defined or menu_province is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-map\"></i>
                                <span>Lieux</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                {# Province  #}
                                <li class=\"treeview {% if menu_province is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-map-pin\"></i>
                                        <span>Province</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_province_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('province_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_province_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('province_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                {# Centre  #}
                                <li class=\"treeview {% if menu_centre is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-map-o\"></i>
                                        <span>Centre</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_centre_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('centre_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_centre_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('centre_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        {% endif %}
                        {% endif %}

                        {% if is_granted('ROLE_SUPERADMIN') %}
                        {# Vérificateur #}
                        <li class=\"treeview {% if menu_verificateur is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-users\"></i>
                                <span>Vérificateur</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"{% if menu_verificateur_list is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('verificateur_index')}}\">
                                        <i class=\"fa fa-circle-o\"></i> Liste
                                    </a>
                                </li>
                                <li class=\"{% if menu_verificateur_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('verificateur_new') }}\">
                                        <i class=\"fa fa-circle-o\"></i> Créer
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {% endif %}

                        {% if is_granted('ROLE_SUPERADMIN') %}
                        {# Marque #}
                        <li class=\"treeview {% if menu_marque is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-header\"></i>
                                <span>Marque</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"{% if menu_marque_list is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('marque_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"{% if menu_marque_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('marque_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                        {% endif %}

                        {% if is_granted('ROLE_SUPERADMIN') %}
                        {# Carrosserie #}
                        <li class=\"treeview {% if menu_carosserie is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-cog\"></i>
                                <span>Carrosserie</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"{% if menu_carosserie_list is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('carosserie_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"{% if menu_carosserie_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('carosserie_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                        {% endif %}

                        {% if is_granted('ROLE_SUPERADMIN') %}
                        {# Source Energie #}
                        <li class=\"treeview {% if menu_energie is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-battery\"></i>
                                <span>Source énergie</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"{% if menu_energie_list is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('energie_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"{% if menu_energie_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('energie_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                        {% endif %}

                        {% if is_granted('ROLE_SUPERADMIN') %}
                        {# Utilisation  #}
                        <li class=\"treeview {% if menu_utilisation is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-hand-rock-o\"></i>
                                <span>Utilisation</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"{% if menu_utilisation_list is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('utilisation_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"{% if menu_utilisation_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('utilisation_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                        {% endif %}

                        {% if is_granted('ROLE_SUPERADMIN') %}
                        {# Genre #}
                        <li class=\"treeview {% if menu_genre is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-clipboard\"></i>
                                <span>Genre</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                {# Type #}
                                <li class=\"treeview {% if menu_genre_type is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-tasks\"></i>
                                        <span>Type</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_genre_type_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('genre_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_genre_type_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('genre_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                {# Categorie #}
                                <li class=\"treeview {% if menu_genre_categorie is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-money\"></i>
                                        <span>Categorie</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_genre_categorie_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('genre_categorie_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_genre_categorie_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('genre_categorie_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        {% endif %}

                        {% if is_granted('ROLE_SUPERADMIN') %}
                        {# VisiteExtra #}
                        <li class=\"treeview {% if menu_visite_extra is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-server\"></i>
                                <span>Visite extra</span>
                                <span class=\"pull-right-container\">
                                        <i class=\"fa fa-angle-left pull-right\"></i>
                                    </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                {# Type #}
                                <li class=\"treeview {% if menu_visite_extra_type is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-tasks\"></i>
                                        <span>Type</span>
                                        <span class=\"pull-right-container\">
                                                <i class=\"fa fa-angle-left pull-right\"></i>
                                            </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_visite_extra_type_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('visite_extra_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_visite_extra_type_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('visite_extra_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                {# Tarif #}
                                <li class=\"treeview {% if menu_visite_extra_tarif is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-money\"></i>
                                        <span>Tarif</span>
                                        <span class=\"pull-right-container\">
                                                <i class=\"fa fa-angle-left pull-right\"></i>
                                            </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_visite_extra_tarif_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('visite_extra_tarif_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_visite_extra_tarif_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('visite_extra_tarif_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        {% endif %}

                        {% if is_granted('ROLE_SUPERADMIN') %}
                        {# Motif #}
                        <li class=\"treeview {% if menu_motif is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-newspaper-o\"></i>
                                <span>Motif</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                {# Type #}
                                <li class=\"treeview {% if menu_motif_type is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-tasks\"></i>
                                        <span>Type</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_motif_type_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('motif_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_motif_type_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('motif_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                {# Tarif #}
                                <li class=\"treeview {% if menu_motif_tarif is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-money\"></i>
                                        <span>Tarif</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_motif_tarif_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('motif_tarif_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_motif_tarif_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('motif_tarif_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        {% endif %}

                        {% if is_granted('ROLE_SUPERADMIN') %}
                        {# Usage #}
                        <li class=\"treeview {% if menu_type_usage is defined or menu_usage is defined or menu_usage_tarif is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-hand-lizard-o\"></i>
                                <span>Usage</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                {# Type #}
                                <li class=\"treeview {% if menu_type_usage is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-tasks\"></i>
                                        <span>Type</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_type_usage_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('type_usage_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_type_usage_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('type_usage_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                {# Usage #}
                                <li class=\"treeview {% if menu_usage is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-hand-paper-o\"></i>
                                        <span>Usage</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_usage_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('usage_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_usage_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('usage_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                {# Tarif #}
                                <li class=\"treeview {% if menu_usage_tarif is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-money\"></i>
                                        <span>Tarif</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_usage_tarif_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('usage_tarif_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_usage_tarif_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('usage_tarif_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        {% endif %}

                        {% if is_granted('ROLE_SUPERADMIN') %}
                        {# Anomalie #}
                        <li class=\"treeview {% if menu_anomalie is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-ambulance\"></i>
                                <span>Anomalie</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                {# Type #}
                                <li class=\"treeview {% if menu_type_anomalie is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-tasks\"></i>
                                        <span>Type</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_type_anomalie_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('type_anomalie_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_type_anomalie_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('type_anomalie_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                {# Anomalie #}
                                <li class=\"treeview {% if menu_anomalie is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-wrench\"></i>
                                        <span>Anomalie</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_anomalie_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('anomalie_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_anomalie_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('anomalie_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        {% endif %}

                        {% if is_granted('ROLE_SUPERADMIN') %}
                        {# Proces Verbal #}
                        <li class=\"treeview {% if menu_proces_verbal is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-bank\"></i>
                                <span>Proces Verbal</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"{% if menu_proces_verbal_list is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('proces_verbal_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"{% if menu_proces_verbal_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('proces_verbal_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                        {% endif %}

                        {% if is_granted('ROLE_SUPERADMIN') %}
                        {# Droit Ptac #}
                        <li class=\"treeview {% if menu_droit_ptac is defined or menu_type_droit_ptac is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-balance-scale\"></i>
                                <span>Droit Ptac</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                {# Type #}
                                <li class=\"treeview {% if menu_type_droit_ptac is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-tasks\"></i>
                                        <span>Type</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_type_droit_ptac_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('type_droit_ptac_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_type_droit_ptac_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('type_droit_ptac_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                {# Droit #}
                                <li class=\"treeview {% if menu_droit_ptac is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-wrench\"></i>
                                        <span>Droit</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_droit_ptac_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('droit_ptac_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_droit_ptac_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('droit_ptac_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        {% endif %}

                        {% if is_granted('ROLE_SUPERADMIN') %}
                        {# Zone de déserte #}
                        <li class=\"treeview {% if menu_zone_deserte is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-map-signs\"></i>
                                <span>Zone de déserte</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"{% if menu_zone_deserte_list is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('zone_deserte_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"{% if menu_zone_deserte_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('zone_deserte_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                        {% endif %}
                    </ul>
                </li>
            {% endif %}


            {% if (is_granted('ROLE_SUPERADMIN') or is_granted('ROLE_ADMIN') or is_granted('ROLE_APPROVISIONNEMENT') or is_granted('ROLE_RECEPTION') or is_granted('ROLE_VISITE')) %}
                {# Approvisionnement #}
                {# <li class=\"treeview {% if menu_user is defined or menu_role is defined %}{{ active }}{% endif %}\"> #}
                <li class=\"treeview {% if menu_bordereau is defined %}{{ active }}{% endif %}\">
                    <a href=\"#\">
                        <i class=\"fa fa-shopping-basket\"></i>
                        <span>Imprimés techniques</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        {% if is_granted('ROLE_ADMIN') %}
                        {# Activation des imprimés techniques #}
                        <li class=\"treeview {% if menu_bordereau is defined %}{% if menu_bordereau_activation is defined %}{{ active }}{% endif %}{% endif %}\">
                            <a href=\"{{ path('bordereau_activation') }}\"><i class=\"fa fa-check-circle\"></i> Activer des imprimés</a>
                        </li>
                        {% endif %}

                        {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_RECEPTION') or is_granted('ROLE_VISITE') or  is_granted('ROLE_APPROVISIONNEMENT') %}
                        {# Activation des imprimés techniques #}
                        <li class=\"treeview {% if menu_imprime_tech_use is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-archive\"></i>
                                <span>Utilisation IT</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                {% if  is_granted('ROLE_ADMIN') or is_granted('ROLE_RECEPTION') or is_granted('ROLE_VISITE') or is_granted('ROLE_APPROVISIONNEMENT') %}
                                <li class=\"{% if menu_imprime_tech_use_list is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('imprime_tech_use_index') }}\"><i class=\"fa fa-search\"></i> Liste des IT utilisés</a>
                                </li>
                                {% endif %}
                                {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_RECEPTION') or is_granted('ROLE_VISITE') or is_granted('ROLE_APPROVISIONNEMENT') %}
                                {% if is_granted('ROLE_RECEPTION') or is_granted('ROLE_VISITE') %}
                                <li class=\"{% if menu_imprime_tech_use_search is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('imprime_tech_use_new') }}\"><i class=\"fa fa-list-ol\"></i> Mise à jour multiple IT</a>
                                </li>
                                <li class=\"{% if menu_imprime_tech_use_search is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('imprime_tech_use_search') }}\"><i class=\"fa fa-list-ol\"></i> Mise à jour utilisation IT</a>
                                </li>
                                {% endif %}
                                <li class=\"{% if menu_imprime_tech_use_stat is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('imprimes_tech_use_statistic') }}\"><i class=\"fa fa-bar-chart\"></i> Statistique utilisation IT</a>
                                </li>
                                {% endif %}
                            </ul>
                        </li>
                        {% endif %}

                        {% if is_granted('ROLE_APPROVISIONNEMENT') %}
                        {# Bordereau d'envoi #}
                        <li class=\"treeview {% if menu_bordereau is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-archive\"></i>
                                <span>Bordereau d'envoi</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"{% if menu_bordereau_search is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('bordereau_search') }}\"><i class=\"fa fa-search\"></i> Rechercher</a>
                                </li>
                                <li class=\"{% if menu_bordereau_list is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('bordereau_index') }}\"><i class=\"fa fa-list-ol\"></i> Liste</a>
                                </li>
                                <li class=\"{% if menu_bordereau_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('bordereau_new') }}\"><i class=\"fa fa-plus\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                        {% endif %}

                        {% if is_granted('ROLE_SUPERADMIN') or is_granted('ROLE_ADMIN') %}
                        {# Imprimé technique #}
                        <li class=\"treeview {% if menu_imprime_tech is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-print\"></i>
                                <span>Imprimés techniques</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"{% if menu_imprime_tech_list is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('imprime_tech_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"{% if menu_imprime_tech_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('imprime_tech_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                        {% endif %}
                    </ul>
                </li>
            {% endif %}
        </ul>
    </section>
</aside>
", ":backoffice:base_admin_sidebar.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\app/Resources\\views/backoffice/base_admin_sidebar.html.twig");
    }
}
