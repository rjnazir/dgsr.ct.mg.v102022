<?php

/* AdminBundle:CtTypeUsage:index.html.twig */
class __TwigTemplate_b62fc9f683f449dc9fc40e8ab13ec997f18087e9e9e682fbd4ea6618cac3be7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeUsage:index.html.twig", 1);
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
        $__internal_23a475dc5d8a00adc522cc27cd6d1a7b3f7c9b3352a62bd3af75c8510c4cdd67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23a475dc5d8a00adc522cc27cd6d1a7b3f7c9b3352a62bd3af75c8510c4cdd67->enter($__internal_23a475dc5d8a00adc522cc27cd6d1a7b3f7c9b3352a62bd3af75c8510c4cdd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeUsage:index.html.twig"));

        $__internal_8e190ae645700fefb9cc7a84dad2d7819d3d59dd5afd8d143942b0c30e7ed2a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e190ae645700fefb9cc7a84dad2d7819d3d59dd5afd8d143942b0c30e7ed2a1->enter($__internal_8e190ae645700fefb9cc7a84dad2d7819d3d59dd5afd8d143942b0c30e7ed2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeUsage:index.html.twig"));

        // line 5
        $context["menu_type_usage"] = true;
        // line 6
        $context["menu_type_usage_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23a475dc5d8a00adc522cc27cd6d1a7b3f7c9b3352a62bd3af75c8510c4cdd67->leave($__internal_23a475dc5d8a00adc522cc27cd6d1a7b3f7c9b3352a62bd3af75c8510c4cdd67_prof);

        
        $__internal_8e190ae645700fefb9cc7a84dad2d7819d3d59dd5afd8d143942b0c30e7ed2a1->leave($__internal_8e190ae645700fefb9cc7a84dad2d7819d3d59dd5afd8d143942b0c30e7ed2a1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2250769b96761729a5c4428e96c3b4fc60df6ea39358ad496246c0f9e013c39b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2250769b96761729a5c4428e96c3b4fc60df6ea39358ad496246c0f9e013c39b->enter($__internal_2250769b96761729a5c4428e96c3b4fc60df6ea39358ad496246c0f9e013c39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3a1b0e1c28604d1264887d083223885cf21fdf345b5f33028940845aac96ae66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a1b0e1c28604d1264887d083223885cf21fdf345b5f33028940845aac96ae66->enter($__internal_3a1b0e1c28604d1264887d083223885cf21fdf345b5f33028940845aac96ae66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des usages ";
        
        $__internal_3a1b0e1c28604d1264887d083223885cf21fdf345b5f33028940845aac96ae66->leave($__internal_3a1b0e1c28604d1264887d083223885cf21fdf345b5f33028940845aac96ae66_prof);

        
        $__internal_2250769b96761729a5c4428e96c3b4fc60df6ea39358ad496246c0f9e013c39b->leave($__internal_2250769b96761729a5c4428e96c3b4fc60df6ea39358ad496246c0f9e013c39b_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_df5426a53455e55816769675c4e0e6aec59bbc8067f603d1615cea0f13de4a84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df5426a53455e55816769675c4e0e6aec59bbc8067f603d1615cea0f13de4a84->enter($__internal_df5426a53455e55816769675c4e0e6aec59bbc8067f603d1615cea0f13de4a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5014ac5e2450b47d995cb4d4adb27bcd653528bdeea052450e04f89f0ab29c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5014ac5e2450b47d995cb4d4adb27bcd653528bdeea052450e04f89f0ab29c15->enter($__internal_5014ac5e2450b47d995cb4d4adb27bcd653528bdeea052450e04f89f0ab29c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_usage_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un usage
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_usage_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-type-usage\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Libellé</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["type_usages"] ?? $this->getContext($context, "type_usages")));
        foreach ($context['_seq'] as $context["_key"] => $context["type_usage"]) {
            // line 57
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["type_usage"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["type_usage"], "tpuLibelle", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_usage_edit", array("id" => $this->getAttribute($context["type_usage"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_usage_delete", array("id" => $this->getAttribute($context["type_usage"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type_usage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                            </tbody>
                        </table>

                        ";
        // line 78
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
        
        $__internal_5014ac5e2450b47d995cb4d4adb27bcd653528bdeea052450e04f89f0ab29c15->leave($__internal_5014ac5e2450b47d995cb4d4adb27bcd653528bdeea052450e04f89f0ab29c15_prof);

        
        $__internal_df5426a53455e55816769675c4e0e6aec59bbc8067f603d1615cea0f13de4a84->leave($__internal_df5426a53455e55816769675c4e0e6aec59bbc8067f603d1615cea0f13de4a84_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_82e31b2b44dcf3736a5914b052ba56062dcf43389867c3cf873814fee76ccba3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82e31b2b44dcf3736a5914b052ba56062dcf43389867c3cf873814fee76ccba3->enter($__internal_82e31b2b44dcf3736a5914b052ba56062dcf43389867c3cf873814fee76ccba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c4dae851261208ed2098d15d8404229cbbf99e06aa4b753dea4a230771cd1108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4dae851261208ed2098d15d8404229cbbf99e06aa4b753dea4a230771cd1108->enter($__internal_c4dae851261208ed2098d15d8404229cbbf99e06aa4b753dea4a230771cd1108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-type-usage').DataTable(
            {
                \"order\": [[ 1, \"desc\" ]],
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
                    \"sEmptyTable\": \"Aucun type d'usage trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_c4dae851261208ed2098d15d8404229cbbf99e06aa4b753dea4a230771cd1108->leave($__internal_c4dae851261208ed2098d15d8404229cbbf99e06aa4b753dea4a230771cd1108_prof);

        
        $__internal_82e31b2b44dcf3736a5914b052ba56062dcf43389867c3cf873814fee76ccba3->leave($__internal_82e31b2b44dcf3736a5914b052ba56062dcf43389867c3cf873814fee76ccba3_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeUsage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 92,  234 => 91,  213 => 78,  208 => 74,  196 => 68,  189 => 64,  183 => 61,  178 => 59,  174 => 57,  170 => 56,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des usages {% endblock %}

{% set menu_type_usage      = true %}
{% set menu_type_usage_list = true %}

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
                    <a href=\"{{ path('type_usage_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un usage
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('type_usage_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-type-usage\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Libellé</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for type_usage in type_usages %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ type_usage.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>{{ type_usage.tpuLibelle }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('type_usage_edit', { 'id': type_usage.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('type_usage_delete', { 'id': type_usage.id }) }}\">
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
            \$('#list-type-usage').DataTable(
            {
                \"order\": [[ 1, \"desc\" ]],
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
                    \"sEmptyTable\": \"Aucun type d'usage trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "AdminBundle:CtTypeUsage:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeUsage/index.html.twig");
    }
}
