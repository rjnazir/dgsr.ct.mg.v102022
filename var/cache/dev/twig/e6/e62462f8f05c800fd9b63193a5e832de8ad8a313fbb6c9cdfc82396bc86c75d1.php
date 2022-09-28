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
        $__internal_f647bff040792721add53996c347f9c2c8051137be484ec716210aa671336e8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f647bff040792721add53996c347f9c2c8051137be484ec716210aa671336e8d->enter($__internal_f647bff040792721add53996c347f9c2c8051137be484ec716210aa671336e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:index.html.twig"));

        $__internal_ed37526fcabea5d502b0f9675d91b2eafcf1417b68cd71d61a9bbe74960aa3ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed37526fcabea5d502b0f9675d91b2eafcf1417b68cd71d61a9bbe74960aa3ef->enter($__internal_ed37526fcabea5d502b0f9675d91b2eafcf1417b68cd71d61a9bbe74960aa3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:index.html.twig"));

        // line 5
        $context["menu_user"] = true;
        // line 6
        $context["menu_user_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f647bff040792721add53996c347f9c2c8051137be484ec716210aa671336e8d->leave($__internal_f647bff040792721add53996c347f9c2c8051137be484ec716210aa671336e8d_prof);

        
        $__internal_ed37526fcabea5d502b0f9675d91b2eafcf1417b68cd71d61a9bbe74960aa3ef->leave($__internal_ed37526fcabea5d502b0f9675d91b2eafcf1417b68cd71d61a9bbe74960aa3ef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_51ae32fb0a5fffd1cd23004190b6b99c9b0fe1a1844058783b03c3062ac77970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51ae32fb0a5fffd1cd23004190b6b99c9b0fe1a1844058783b03c3062ac77970->enter($__internal_51ae32fb0a5fffd1cd23004190b6b99c9b0fe1a1844058783b03c3062ac77970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_86be8d17987bbd672e65b5c112782af4b7658b851b61dcbbce07c5c38514e4c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86be8d17987bbd672e65b5c112782af4b7658b851b61dcbbce07c5c38514e4c9->enter($__internal_86be8d17987bbd672e65b5c112782af4b7658b851b61dcbbce07c5c38514e4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des utilisateurs ";
        
        $__internal_86be8d17987bbd672e65b5c112782af4b7658b851b61dcbbce07c5c38514e4c9->leave($__internal_86be8d17987bbd672e65b5c112782af4b7658b851b61dcbbce07c5c38514e4c9_prof);

        
        $__internal_51ae32fb0a5fffd1cd23004190b6b99c9b0fe1a1844058783b03c3062ac77970->leave($__internal_51ae32fb0a5fffd1cd23004190b6b99c9b0fe1a1844058783b03c3062ac77970_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8bb5de379a40dd6cdf0c65d02aab88497267b0692c6b6c8176b2c946d2ccbb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8bb5de379a40dd6cdf0c65d02aab88497267b0692c6b6c8176b2c946d2ccbb1->enter($__internal_e8bb5de379a40dd6cdf0c65d02aab88497267b0692c6b6c8176b2c946d2ccbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_62ff2c8dc91e86234b51693a31c4266e5289934195203d1c85a708c4c9b938ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ff2c8dc91e86234b51693a31c4266e5289934195203d1c85a708c4c9b938ef->enter($__internal_62ff2c8dc91e86234b51693a31c4266e5289934195203d1c85a708c4c9b938ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_62ff2c8dc91e86234b51693a31c4266e5289934195203d1c85a708c4c9b938ef->leave($__internal_62ff2c8dc91e86234b51693a31c4266e5289934195203d1c85a708c4c9b938ef_prof);

        
        $__internal_e8bb5de379a40dd6cdf0c65d02aab88497267b0692c6b6c8176b2c946d2ccbb1->leave($__internal_e8bb5de379a40dd6cdf0c65d02aab88497267b0692c6b6c8176b2c946d2ccbb1_prof);

    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fae2989208243763fd0ed2c250b11a309b2a68d8c55e4c4d8d2b1b619437855b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae2989208243763fd0ed2c250b11a309b2a68d8c55e4c4d8d2b1b619437855b->enter($__internal_fae2989208243763fd0ed2c250b11a309b2a68d8c55e4c4d8d2b1b619437855b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e3050f5ffdd766277d01f1a2cf8ccbcf89b191af23ccc261524e39a80372d4a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3050f5ffdd766277d01f1a2cf8ccbcf89b191af23ccc261524e39a80372d4a8->enter($__internal_e3050f5ffdd766277d01f1a2cf8ccbcf89b191af23ccc261524e39a80372d4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_e3050f5ffdd766277d01f1a2cf8ccbcf89b191af23ccc261524e39a80372d4a8->leave($__internal_e3050f5ffdd766277d01f1a2cf8ccbcf89b191af23ccc261524e39a80372d4a8_prof);

        
        $__internal_fae2989208243763fd0ed2c250b11a309b2a68d8c55e4c4d8d2b1b619437855b->leave($__internal_fae2989208243763fd0ed2c250b11a309b2a68d8c55e4c4d8d2b1b619437855b_prof);

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
