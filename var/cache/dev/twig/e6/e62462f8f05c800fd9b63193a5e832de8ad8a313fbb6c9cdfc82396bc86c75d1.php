<?php

/* UserBundle:User:index.html.twig */
class __TwigTemplate_dad5508f735f73c138375e57f8e9c2e2882b164656c495c840af249d2a771574 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "UserBundle:User:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58977ad15cea61d5fab7e954103c52de8c1261d25e02d387519f555908428cb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58977ad15cea61d5fab7e954103c52de8c1261d25e02d387519f555908428cb2->enter($__internal_58977ad15cea61d5fab7e954103c52de8c1261d25e02d387519f555908428cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:index.html.twig"));

        $__internal_2a3475674d73fe649a7578f27ea11e24d797f17666f62bc957eac707198788b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3475674d73fe649a7578f27ea11e24d797f17666f62bc957eac707198788b4->enter($__internal_2a3475674d73fe649a7578f27ea11e24d797f17666f62bc957eac707198788b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:index.html.twig"));

        // line 5
        $context["menu_user"] = true;
        // line 6
        $context["menu_user_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58977ad15cea61d5fab7e954103c52de8c1261d25e02d387519f555908428cb2->leave($__internal_58977ad15cea61d5fab7e954103c52de8c1261d25e02d387519f555908428cb2_prof);

        
        $__internal_2a3475674d73fe649a7578f27ea11e24d797f17666f62bc957eac707198788b4->leave($__internal_2a3475674d73fe649a7578f27ea11e24d797f17666f62bc957eac707198788b4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b49647de377f857de3f43cdfec77c2d96cc10e254157a831961449b78bcaaef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b49647de377f857de3f43cdfec77c2d96cc10e254157a831961449b78bcaaef->enter($__internal_9b49647de377f857de3f43cdfec77c2d96cc10e254157a831961449b78bcaaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f240b3c12cf2ec2413226c5c75c9b655305a30e4989c888288d811068acda4e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f240b3c12cf2ec2413226c5c75c9b655305a30e4989c888288d811068acda4e0->enter($__internal_f240b3c12cf2ec2413226c5c75c9b655305a30e4989c888288d811068acda4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des utilisateurs ";
        
        $__internal_f240b3c12cf2ec2413226c5c75c9b655305a30e4989c888288d811068acda4e0->leave($__internal_f240b3c12cf2ec2413226c5c75c9b655305a30e4989c888288d811068acda4e0_prof);

        
        $__internal_9b49647de377f857de3f43cdfec77c2d96cc10e254157a831961449b78bcaaef->leave($__internal_9b49647de377f857de3f43cdfec77c2d96cc10e254157a831961449b78bcaaef_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_efad99dd73434404c29358bf1a62a02a99b873500e38d0ce38ac78387321fd9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efad99dd73434404c29358bf1a62a02a99b873500e38d0ce38ac78387321fd9d->enter($__internal_efad99dd73434404c29358bf1a62a02a99b873500e38d0ce38ac78387321fd9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd80be99bb6a06a338adb20e40324d21d7741d4d617ae173ee0dfeb6a10cd355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd80be99bb6a06a338adb20e40324d21d7741d4d617ae173ee0dfeb6a10cd355->enter($__internal_bd80be99bb6a06a338adb20e40324d21d7741d4d617ae173ee0dfeb6a10cd355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "        <div class=\"callout callout-success\">
            ";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 21
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 22
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">                    
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                ";
        // line 36
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un utilisateur
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive kl-box-liste\">
                        <table id=\"list-user\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th class=\"kl-checkbox-col\"></th>
                                     <th class=\"kl-nom-col\">Nom</th>
                                     <th class=\"kl-prof-col\">Profession</th>
                                     <th>Email</th>
                                     <th>Centre</th>
                                     <th class=\"kl-role-col\">Rôle</th>
                                     <th>Date inscription</th>
                                     <th class=\"kl-action-col\">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 62
            echo "                                    <tr>
                                        <td class=\"text-center\">
                                            <input type=\"checkbox\" value=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "usrName", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "usrProfession", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            ";
            // line 70
            if ( !(null === $this->getAttribute($context["user"], "ctCentre", array()))) {
                // line 71
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "ctCentre", array()), "ctrNom", array()), "html", null, true);
                echo "
                                                (";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["user"], "ctCentre", array()), "ctProvince", array()), "prvNom", array()), "html", null, true);
                echo ")
                                            ";
            }
            // line 74
            echo "                                        </td>
                                        <td>
                                            ";
            // line 76
            if (($this->getAttribute($this->getAttribute($context["user"], "ctRole", array()), "roleName", array()) == "Admin")) {
                // line 77
                echo "                                                Chef de centre
                                            ";
            } else {
                // line 79
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "ctRole", array()), "roleName", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 81
            echo "                                        </td>
                                        <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "usrCreatedAt", array()), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                                        <td class=\"kl-action-button-bloc\">
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            ";
            // line 88
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
                // line 89
                echo "                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                            ";
            }
            // line 94
            echo "                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                            </tbody>
                        </table>

                        ";
        // line 101
        echo "                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_bd80be99bb6a06a338adb20e40324d21d7741d4d617ae173ee0dfeb6a10cd355->leave($__internal_bd80be99bb6a06a338adb20e40324d21d7741d4d617ae173ee0dfeb6a10cd355_prof);

        
        $__internal_efad99dd73434404c29358bf1a62a02a99b873500e38d0ce38ac78387321fd9d->leave($__internal_efad99dd73434404c29358bf1a62a02a99b873500e38d0ce38ac78387321fd9d_prof);

    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a6e49a11497203154be51681caa764186856109168423a4ffd3e6f672c21f1fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6e49a11497203154be51681caa764186856109168423a4ffd3e6f672c21f1fe->enter($__internal_a6e49a11497203154be51681caa764186856109168423a4ffd3e6f672c21f1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_53ef7ff92be9de584ffa56725d4a2c8907f32840a62034dd3eaea61717a0d0d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ef7ff92be9de584ffa56725d4a2c8907f32840a62034dd3eaea61717a0d0d8->enter($__internal_53ef7ff92be9de584ffa56725d4a2c8907f32840a62034dd3eaea61717a0d0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 115
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-user').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucun utilisateur trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_53ef7ff92be9de584ffa56725d4a2c8907f32840a62034dd3eaea61717a0d0d8->leave($__internal_53ef7ff92be9de584ffa56725d4a2c8907f32840a62034dd3eaea61717a0d0d8_prof);

        
        $__internal_a6e49a11497203154be51681caa764186856109168423a4ffd3e6f672c21f1fe->leave($__internal_a6e49a11497203154be51681caa764186856109168423a4ffd3e6f672c21f1fe_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 115,  290 => 114,  269 => 101,  264 => 97,  256 => 94,  249 => 90,  246 => 89,  244 => 88,  238 => 85,  232 => 82,  229 => 81,  223 => 79,  219 => 77,  217 => 76,  213 => 74,  208 => 72,  203 => 71,  201 => 70,  196 => 68,  192 => 67,  188 => 66,  183 => 64,  179 => 62,  175 => 61,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% block title %}{{ parent() }} Liste des utilisateurs {% endblock %}

{% set menu_user      = true %}
{% set menu_user_list = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    
    {% for key, messages in app.session.flashbag.all() %}
        <div class=\"callout callout-{{ key }}\">
            {{ messages }} <br />
        </div>
    {% endfor %}
    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">                    
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                {# Bouton création #}
                <div class=\"row add-btn-top-list\">
                    <a href=\"{{ path('user_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un utilisateur
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('user_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive kl-box-liste\">
                        <table id=\"list-user\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th class=\"kl-checkbox-col\"></th>
                                     <th class=\"kl-nom-col\">Nom</th>
                                     <th class=\"kl-prof-col\">Profession</th>
                                     <th>Email</th>
                                     <th>Centre</th>
                                     <th class=\"kl-role-col\">Rôle</th>
                                     <th>Date inscription</th>
                                     <th class=\"kl-action-col\">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for user in users %}
                                    <tr>
                                        <td class=\"text-center\">
                                            <input type=\"checkbox\" value=\"{{ user.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>{{ user.usrName }}</td>
                                        <td>{{ user.usrProfession }}</td>
                                        <td>{{ user.email }}</td>
                                        <td>
                                            {% if (user.ctCentre is not null) %}
                                                {{ user.ctCentre.ctrNom }}
                                                ({{ user.ctCentre.ctProvince.prvNom }})
                                            {% endif %}
                                        </td>
                                        <td>
                                            {% if (user.ctRole.roleName == 'Admin') %}
                                                Chef de centre
                                            {% else %}
                                                {{ user.ctRole.roleName }}
                                            {% endif %}
                                        </td>
                                        <td>{{ user.usrCreatedAt|date('d/m/Y H:i') }}</td>
                                        <td class=\"kl-action-button-bloc\">
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('user_edit', { 'id': user.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            {% if is_granted('ROLE_SUPERADMIN') %}
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('user_delete', { 'id': user.id }) }}\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>

                        {# Bouton suppression #}
                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-user').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucun utilisateur trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "UserBundle:User:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\Service\\UserBundle/Resources/views/User/index.html.twig");
    }
}
