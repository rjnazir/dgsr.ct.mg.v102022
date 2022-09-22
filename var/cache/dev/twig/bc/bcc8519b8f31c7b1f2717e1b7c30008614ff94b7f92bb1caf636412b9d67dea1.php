<?php

/* UserBundle:Verificateur:index.html.twig */
class __TwigTemplate_256184db32c86df5e03ce27675fd5e7da1ea3783c7bc633d95c260fd99493977 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "UserBundle:Verificateur:index.html.twig", 1);
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
        $__internal_a60ff9c7c1a0c32b148bc73b5f0bd6b4c2211bb978a6fcf22eb661289e96d08a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a60ff9c7c1a0c32b148bc73b5f0bd6b4c2211bb978a6fcf22eb661289e96d08a->enter($__internal_a60ff9c7c1a0c32b148bc73b5f0bd6b4c2211bb978a6fcf22eb661289e96d08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Verificateur:index.html.twig"));

        $__internal_e150bace0f46dcaa489bec5174c9ccad3db2edfaf67d386ad7b4e89d71b6bc89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e150bace0f46dcaa489bec5174c9ccad3db2edfaf67d386ad7b4e89d71b6bc89->enter($__internal_e150bace0f46dcaa489bec5174c9ccad3db2edfaf67d386ad7b4e89d71b6bc89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Verificateur:index.html.twig"));

        // line 5
        $context["menu_verificateur"] = true;
        // line 6
        $context["menu_verificateur_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a60ff9c7c1a0c32b148bc73b5f0bd6b4c2211bb978a6fcf22eb661289e96d08a->leave($__internal_a60ff9c7c1a0c32b148bc73b5f0bd6b4c2211bb978a6fcf22eb661289e96d08a_prof);

        
        $__internal_e150bace0f46dcaa489bec5174c9ccad3db2edfaf67d386ad7b4e89d71b6bc89->leave($__internal_e150bace0f46dcaa489bec5174c9ccad3db2edfaf67d386ad7b4e89d71b6bc89_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7d06ec2ff3f2a32a11c603880a6c322a964f3fa2b5f1fbca952ff3305058164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7d06ec2ff3f2a32a11c603880a6c322a964f3fa2b5f1fbca952ff3305058164->enter($__internal_a7d06ec2ff3f2a32a11c603880a6c322a964f3fa2b5f1fbca952ff3305058164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5f9b08d3239335f6da4f4b193ceaaa107036f746c8492c100701f3a5c7cf4d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9b08d3239335f6da4f4b193ceaaa107036f746c8492c100701f3a5c7cf4d58->enter($__internal_5f9b08d3239335f6da4f4b193ceaaa107036f746c8492c100701f3a5c7cf4d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des utilisateurs ";
        
        $__internal_5f9b08d3239335f6da4f4b193ceaaa107036f746c8492c100701f3a5c7cf4d58->leave($__internal_5f9b08d3239335f6da4f4b193ceaaa107036f746c8492c100701f3a5c7cf4d58_prof);

        
        $__internal_a7d06ec2ff3f2a32a11c603880a6c322a964f3fa2b5f1fbca952ff3305058164->leave($__internal_a7d06ec2ff3f2a32a11c603880a6c322a964f3fa2b5f1fbca952ff3305058164_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_33b034c3559c92dca5347b38d5713179b4b706c5bdd7e14ee963d1986171b7d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b034c3559c92dca5347b38d5713179b4b706c5bdd7e14ee963d1986171b7d3->enter($__internal_33b034c3559c92dca5347b38d5713179b4b706c5bdd7e14ee963d1986171b7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e73005a6989fcf2e8b013808a8d8597405092caa005663bae41678a1fc1ca7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e73005a6989fcf2e8b013808a8d8597405092caa005663bae41678a1fc1ca7c->enter($__internal_7e73005a6989fcf2e8b013808a8d8597405092caa005663bae41678a1fc1ca7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">                    
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                ";
        // line 30
        echo "                ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
            // line 31
            echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verificateur_new");
            echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un vérificateur
                        </button>
                    </a>
                </div>
                ";
        }
        // line 40
        echo "
                <form action=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verificateur_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-verificateur\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Nom</th>
                                     <th>Profession</th>
                                     <th>Email</th>
                                     <th>Centre</th>
                                     <th>Date inscription</th>
                                     <th>Présence</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 58
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "usrName", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "usrProfession", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "usrEmail", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            ";
            // line 66
            if ( !(null === $this->getAttribute($context["user"], "ctCentre", array()))) {
                // line 67
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "ctCentre", array()), "ctrNom", array()), "html", null, true);
                echo "
                                                (";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["user"], "ctCentre", array()), "ctProvince", array()), "prvNom", array()), "html", null, true);
                echo ")
                                            ";
            }
            // line 70
            echo "                                        </td>
                                        <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "usrCreatedAt", array()), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                                        <td class=\"kl-oui-non\">
                                            ";
            // line 73
            if (($this->getAttribute($context["user"], "usrPresence", array()) == 1)) {
                // line 74
                echo "                                                Oui
                                            ";
            } else {
                // line 76
                echo "                                                Non
                                            ";
            }
            // line 78
            echo "                                        </td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verificateur_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            ";
            // line 84
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
                // line 85
                echo "                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verificateur_delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                            ";
            }
            // line 90
            echo "                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                            </tbody>
                        </table>
                        
                        ";
        // line 96
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
            // line 97
            echo "                        ";
            // line 98
            echo "                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
                        ";
        }
        // line 105
        echo "                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_7e73005a6989fcf2e8b013808a8d8597405092caa005663bae41678a1fc1ca7c->leave($__internal_7e73005a6989fcf2e8b013808a8d8597405092caa005663bae41678a1fc1ca7c_prof);

        
        $__internal_33b034c3559c92dca5347b38d5713179b4b706c5bdd7e14ee963d1986171b7d3->leave($__internal_33b034c3559c92dca5347b38d5713179b4b706c5bdd7e14ee963d1986171b7d3_prof);

    }

    // line 112
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_27f1ce83f16f3d9bc3f44c341e1baf2afb8f2f7497a7508a1ce119055d08048b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27f1ce83f16f3d9bc3f44c341e1baf2afb8f2f7497a7508a1ce119055d08048b->enter($__internal_27f1ce83f16f3d9bc3f44c341e1baf2afb8f2f7497a7508a1ce119055d08048b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_eed4651d0e53dca3798f24e3520b19dbd8413576f8a6afc946f080b06d05db0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed4651d0e53dca3798f24e3520b19dbd8413576f8a6afc946f080b06d05db0e->enter($__internal_eed4651d0e53dca3798f24e3520b19dbd8413576f8a6afc946f080b06d05db0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 113
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-verificateur').DataTable(
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
                    \"sEmptyTable\": \"Aucun vérificateur trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_eed4651d0e53dca3798f24e3520b19dbd8413576f8a6afc946f080b06d05db0e->leave($__internal_eed4651d0e53dca3798f24e3520b19dbd8413576f8a6afc946f080b06d05db0e_prof);

        
        $__internal_27f1ce83f16f3d9bc3f44c341e1baf2afb8f2f7497a7508a1ce119055d08048b->leave($__internal_27f1ce83f16f3d9bc3f44c341e1baf2afb8f2f7497a7508a1ce119055d08048b_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Verificateur:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 113,  280 => 112,  265 => 105,  256 => 98,  254 => 97,  252 => 96,  247 => 93,  239 => 90,  232 => 86,  229 => 85,  227 => 84,  221 => 81,  216 => 78,  212 => 76,  208 => 74,  206 => 73,  201 => 71,  198 => 70,  193 => 68,  188 => 67,  186 => 66,  181 => 64,  177 => 63,  173 => 62,  168 => 60,  164 => 58,  160 => 57,  141 => 41,  138 => 40,  127 => 32,  124 => 31,  121 => 30,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% set menu_verificateur    = true %}
{% set menu_verificateur_list = true %}

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
    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">                    
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                {# Bouton création #}
                {% if is_granted('ROLE_SUPERADMIN') %}
                <div class=\"row add-btn-top-list\">
                    <a href=\"{{ path('verificateur_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un vérificateur
                        </button>
                    </a>
                </div>
                {% endif %}

                <form action=\"{{ path('verificateur_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-verificateur\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Nom</th>
                                     <th>Profession</th>
                                     <th>Email</th>
                                     <th>Centre</th>
                                     <th>Date inscription</th>
                                     <th>Présence</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for user in users %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ user.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>{{ user.usrName }}</td>
                                        <td>{{ user.usrProfession }}</td>
                                        <td>{{ user.usrEmail }}</td>
                                        <td>
                                            {% if(user.ctCentre is not null) %}
                                                {{ user.ctCentre.ctrNom }}
                                                ({{ user.ctCentre.ctProvince.prvNom }})
                                            {% endif %}
                                        </td>
                                        <td>{{ user.usrCreatedAt|date('d/m/Y H:i') }}</td>
                                        <td class=\"kl-oui-non\">
                                            {% if(user.usrPresence == 1) %}
                                                Oui
                                            {% else %}
                                                Non
                                            {% endif %}
                                        </td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('verificateur_edit', { 'id': user.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            {% if is_granted('ROLE_SUPERADMIN') %}
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('verificateur_delete', { 'id': user.id }) }}\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                        
                        {% if is_granted('ROLE_SUPERADMIN') %}
                        {# Bouton suppression #}
                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
                        {% endif %}
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
            \$('#list-verificateur').DataTable(
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
                    \"sEmptyTable\": \"Aucun vérificateur trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "UserBundle:Verificateur:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\Service\\UserBundle/Resources/views/Verificateur/index.html.twig");
    }
}
