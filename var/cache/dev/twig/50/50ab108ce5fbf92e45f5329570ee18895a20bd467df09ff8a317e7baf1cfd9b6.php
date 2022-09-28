<?php

/* AdminBundle:CtUsage:index.html.twig */
class __TwigTemplate_c0f3b577cde582258636727185c3ccdce181a2e490dd2e779bcd5fc964eb81f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtUsage:index.html.twig", 1);
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
        $__internal_34b829f53d197d6147f07cfc751619d06f9a47eeb9e74b354f12f4717f3d63f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34b829f53d197d6147f07cfc751619d06f9a47eeb9e74b354f12f4717f3d63f2->enter($__internal_34b829f53d197d6147f07cfc751619d06f9a47eeb9e74b354f12f4717f3d63f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUsage:index.html.twig"));

        $__internal_54088486c61b76f7abb46d5545b62ffb63f2f1ae19be53561133d25dfa2e1d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54088486c61b76f7abb46d5545b62ffb63f2f1ae19be53561133d25dfa2e1d6e->enter($__internal_54088486c61b76f7abb46d5545b62ffb63f2f1ae19be53561133d25dfa2e1d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUsage:index.html.twig"));

        // line 5
        $context["menu_usage"] = true;
        // line 6
        $context["menu_usage_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34b829f53d197d6147f07cfc751619d06f9a47eeb9e74b354f12f4717f3d63f2->leave($__internal_34b829f53d197d6147f07cfc751619d06f9a47eeb9e74b354f12f4717f3d63f2_prof);

        
        $__internal_54088486c61b76f7abb46d5545b62ffb63f2f1ae19be53561133d25dfa2e1d6e->leave($__internal_54088486c61b76f7abb46d5545b62ffb63f2f1ae19be53561133d25dfa2e1d6e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_237cfbf2e2c23a6da4621a730cc52951d9b3e8a22b8f17667990f4d66a3b5283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_237cfbf2e2c23a6da4621a730cc52951d9b3e8a22b8f17667990f4d66a3b5283->enter($__internal_237cfbf2e2c23a6da4621a730cc52951d9b3e8a22b8f17667990f4d66a3b5283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a7cb5e1f38ec46561eed1419f6f92367bbf02d621d7021522bf3f4ba6f1dfce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7cb5e1f38ec46561eed1419f6f92367bbf02d621d7021522bf3f4ba6f1dfce7->enter($__internal_a7cb5e1f38ec46561eed1419f6f92367bbf02d621d7021522bf3f4ba6f1dfce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des usages ";
        
        $__internal_a7cb5e1f38ec46561eed1419f6f92367bbf02d621d7021522bf3f4ba6f1dfce7->leave($__internal_a7cb5e1f38ec46561eed1419f6f92367bbf02d621d7021522bf3f4ba6f1dfce7_prof);

        
        $__internal_237cfbf2e2c23a6da4621a730cc52951d9b3e8a22b8f17667990f4d66a3b5283->leave($__internal_237cfbf2e2c23a6da4621a730cc52951d9b3e8a22b8f17667990f4d66a3b5283_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_81ceddc48d50ee2d0dd112804635cc6de3a1e1e2b9fd0d3354d58ca0e20f7690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81ceddc48d50ee2d0dd112804635cc6de3a1e1e2b9fd0d3354d58ca0e20f7690->enter($__internal_81ceddc48d50ee2d0dd112804635cc6de3a1e1e2b9fd0d3354d58ca0e20f7690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d52df3bf37b0f295aadb66a917ee8729d2b7193ebb10a9d6ae731d7fbd01cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d52df3bf37b0f295aadb66a917ee8729d2b7193ebb10a9d6ae731d7fbd01cc8->enter($__internal_9d52df3bf37b0f295aadb66a917ee8729d2b7193ebb10a9d6ae731d7fbd01cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usage_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un usage
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usage_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-usage\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Nom</th>
                                     <th>Validite</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["usages"] ?? $this->getContext($context, "usages")));
        foreach ($context['_seq'] as $context["_key"] => $context["usage"]) {
            // line 58
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["usage"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        ";
            // line 63
            echo "                                            ";
            // line 64
            echo "                                                ";
            // line 65
            echo "                                            ";
            // line 66
            echo "                                        ";
            // line 67
            echo "                                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usage"], "usgLibelle", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["usage"], "usgValidite", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usage_edit", array("id" => $this->getAttribute($context["usage"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usage_delete", array("id" => $this->getAttribute($context["usage"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                            </tbody>
                        </table>

                        ";
        // line 85
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
        
        $__internal_9d52df3bf37b0f295aadb66a917ee8729d2b7193ebb10a9d6ae731d7fbd01cc8->leave($__internal_9d52df3bf37b0f295aadb66a917ee8729d2b7193ebb10a9d6ae731d7fbd01cc8_prof);

        
        $__internal_81ceddc48d50ee2d0dd112804635cc6de3a1e1e2b9fd0d3354d58ca0e20f7690->leave($__internal_81ceddc48d50ee2d0dd112804635cc6de3a1e1e2b9fd0d3354d58ca0e20f7690_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_58184e1a0a6f6b845f69a6255a1f1374b8bcc381572ef98cdaff0f3617daeaa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58184e1a0a6f6b845f69a6255a1f1374b8bcc381572ef98cdaff0f3617daeaa9->enter($__internal_58184e1a0a6f6b845f69a6255a1f1374b8bcc381572ef98cdaff0f3617daeaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_49bcf6aab89ef2b30524947b908e1366630199e21a89e9c48ad634de5d3a71b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49bcf6aab89ef2b30524947b908e1366630199e21a89e9c48ad634de5d3a71b2->enter($__internal_49bcf6aab89ef2b30524947b908e1366630199e21a89e9c48ad634de5d3a71b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 99
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-usage').DataTable(
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
                    \"sEmptyTable\": \"Aucune usage trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_49bcf6aab89ef2b30524947b908e1366630199e21a89e9c48ad634de5d3a71b2->leave($__internal_49bcf6aab89ef2b30524947b908e1366630199e21a89e9c48ad634de5d3a71b2_prof);

        
        $__internal_58184e1a0a6f6b845f69a6255a1f1374b8bcc381572ef98cdaff0f3617daeaa9->leave($__internal_58184e1a0a6f6b845f69a6255a1f1374b8bcc381572ef98cdaff0f3617daeaa9_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtUsage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 99,  248 => 98,  227 => 85,  222 => 81,  210 => 75,  203 => 71,  197 => 68,  192 => 67,  190 => 66,  188 => 65,  186 => 64,  184 => 63,  179 => 60,  175 => 58,  171 => 57,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% set menu_usage      = true %}
{% set menu_usage_list = true %}

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
                    <a href=\"{{ path('usage_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un usage
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('usage_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-usage\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Nom</th>
                                     <th>Validite</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for usage in usages %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ usage.id }}\" name=\"delete[]\" />
                                        </td>
                                        {#<td>#}
                                            {#}#}
                                                {#{{ usage.ctTypeUsage.tpuLibelle }}#}
                                            {#{% endif %}#}
                                        {#</td>#}
                                        <td>{{ usage.usgLibelle }}</td>
                                        <td>{{ usage.usgValidite }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('usage_edit', { 'id': usage.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('usage_delete', { 'id': usage.id }) }}\">
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
            \$('#list-usage').DataTable(
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
                    \"sEmptyTable\": \"Aucune usage trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "AdminBundle:CtUsage:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtUsage/index.html.twig");
    }
}
