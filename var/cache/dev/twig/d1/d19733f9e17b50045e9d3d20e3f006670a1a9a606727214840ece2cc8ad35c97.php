<?php

/* @Admin/CtContreVisite/index.html.twig */
class __TwigTemplate_3ee64564e462037d5fdfcf09af59a3577abbdc565022e2e53c903e5edf4c9e98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtContreVisite/index.html.twig", 1);
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
        $__internal_19b4641ad8f0c2290038aba04775ec015bf64f3cb55ab2f299adf7f92f979735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19b4641ad8f0c2290038aba04775ec015bf64f3cb55ab2f299adf7f92f979735->enter($__internal_19b4641ad8f0c2290038aba04775ec015bf64f3cb55ab2f299adf7f92f979735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtContreVisite/index.html.twig"));

        $__internal_de7a20a225d6ba1b9411ff96ca45094011a420d544194cba4cefd5f5c7a7e2f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de7a20a225d6ba1b9411ff96ca45094011a420d544194cba4cefd5f5c7a7e2f8->enter($__internal_de7a20a225d6ba1b9411ff96ca45094011a420d544194cba4cefd5f5c7a7e2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtContreVisite/index.html.twig"));

        // line 5
        $context["menu_contre_visite"] = true;
        // line 6
        $context["menu_contre_contre_visite_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19b4641ad8f0c2290038aba04775ec015bf64f3cb55ab2f299adf7f92f979735->leave($__internal_19b4641ad8f0c2290038aba04775ec015bf64f3cb55ab2f299adf7f92f979735_prof);

        
        $__internal_de7a20a225d6ba1b9411ff96ca45094011a420d544194cba4cefd5f5c7a7e2f8->leave($__internal_de7a20a225d6ba1b9411ff96ca45094011a420d544194cba4cefd5f5c7a7e2f8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6957c8cc211f6995542b1ceecc1be23bcbac3990bfa8dd7b8ae0df55c718b8d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6957c8cc211f6995542b1ceecc1be23bcbac3990bfa8dd7b8ae0df55c718b8d9->enter($__internal_6957c8cc211f6995542b1ceecc1be23bcbac3990bfa8dd7b8ae0df55c718b8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe53d85305003ad5f060c62311238067d7615406711dc92735e313fbce81c567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe53d85305003ad5f060c62311238067d7615406711dc92735e313fbce81c567->enter($__internal_fe53d85305003ad5f060c62311238067d7615406711dc92735e313fbce81c567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des contre visites ";
        
        $__internal_fe53d85305003ad5f060c62311238067d7615406711dc92735e313fbce81c567->leave($__internal_fe53d85305003ad5f060c62311238067d7615406711dc92735e313fbce81c567_prof);

        
        $__internal_6957c8cc211f6995542b1ceecc1be23bcbac3990bfa8dd7b8ae0df55c718b8d9->leave($__internal_6957c8cc211f6995542b1ceecc1be23bcbac3990bfa8dd7b8ae0df55c718b8d9_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a49e3494f61404a73448942cc146217c82651000661f4d9b3e59270cd37931d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a49e3494f61404a73448942cc146217c82651000661f4d9b3e59270cd37931d->enter($__internal_9a49e3494f61404a73448942cc146217c82651000661f4d9b3e59270cd37931d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_710a41f3e3ba1002e5730d1d91c58d92c88224430c54becba6633a85059c8eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710a41f3e3ba1002e5730d1d91c58d92c88224430c54becba6633a85059c8eaa->enter($__internal_710a41f3e3ba1002e5730d1d91c58d92c88224430c54becba6633a85059c8eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contre_visite_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un contre visite technique
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contre_visite_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-contre-visite\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Numéro immatriculation carte grise</th>
                                     <th>Date de création</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["visites"] ?? $this->getContext($context, "visites")));
        foreach ($context['_seq'] as $context["_key"] => $context["visite"]) {
            // line 58
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["visite"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>
                                            ";
            // line 63
            if ($this->getAttribute($context["visite"], "ctCarteGrise", array())) {
                // line 64
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["visite"], "ctCarteGrise", array()), "cgImmatriculation", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 66
            echo "                                        </td>
                                        <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["visite"], "vstCreated", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contre_visite_edit", array("id" => $this->getAttribute($context["visite"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contre_visite_delete", array("id" => $this->getAttribute($context["visite"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                            </tbody>
                        </table>

                        ";
        // line 84
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
        
        $__internal_710a41f3e3ba1002e5730d1d91c58d92c88224430c54becba6633a85059c8eaa->leave($__internal_710a41f3e3ba1002e5730d1d91c58d92c88224430c54becba6633a85059c8eaa_prof);

        
        $__internal_9a49e3494f61404a73448942cc146217c82651000661f4d9b3e59270cd37931d->leave($__internal_9a49e3494f61404a73448942cc146217c82651000661f4d9b3e59270cd37931d_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fe4944c4b8453b8a51ae154905706ae7b33c3560ca91583fa832ae82311c0df9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe4944c4b8453b8a51ae154905706ae7b33c3560ca91583fa832ae82311c0df9->enter($__internal_fe4944c4b8453b8a51ae154905706ae7b33c3560ca91583fa832ae82311c0df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_225ff94a648ba52631d498e6a3f893c591533ac4d16177d893b687d1310cfeb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_225ff94a648ba52631d498e6a3f893c591533ac4d16177d893b687d1310cfeb5->enter($__internal_225ff94a648ba52631d498e6a3f893c591533ac4d16177d893b687d1310cfeb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-contre-visite').DataTable(
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
                    \"sEmptyTable\": \"Aucune contre visite trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_225ff94a648ba52631d498e6a3f893c591533ac4d16177d893b687d1310cfeb5->leave($__internal_225ff94a648ba52631d498e6a3f893c591533ac4d16177d893b687d1310cfeb5_prof);

        
        $__internal_fe4944c4b8453b8a51ae154905706ae7b33c3560ca91583fa832ae82311c0df9->leave($__internal_fe4944c4b8453b8a51ae154905706ae7b33c3560ca91583fa832ae82311c0df9_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtContreVisite/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 98,  247 => 97,  226 => 84,  221 => 80,  209 => 74,  202 => 70,  196 => 67,  193 => 66,  187 => 64,  185 => 63,  179 => 60,  175 => 58,  171 => 57,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des contre visites {% endblock %}

{% set menu_contre_visite      = true %}
{% set menu_contre_contre_visite_list = true %}

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
                    <a href=\"{{ path('contre_visite_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un contre visite technique
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('contre_visite_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-contre-visite\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Numéro immatriculation carte grise</th>
                                     <th>Date de création</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for visite in visites %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ visite.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>
                                            {% if visite.ctCarteGrise %}
                                                {{ visite.ctCarteGrise.cgImmatriculation }}
                                            {% endif %}
                                        </td>
                                        <td>{{ visite.vstCreated|date('d/m/Y') }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('contre_visite_edit', { 'id': visite.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('contre_visite_delete', { 'id': visite.id }) }}\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
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
            \$('#list-contre-visite').DataTable(
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
                    \"sEmptyTable\": \"Aucune contre visite trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "@Admin/CtContreVisite/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtContreVisite\\index.html.twig");
    }
}
