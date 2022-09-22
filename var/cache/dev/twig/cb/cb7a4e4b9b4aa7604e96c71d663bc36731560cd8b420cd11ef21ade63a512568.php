<?php

/* @Admin/CtUsageTarif/index.html.twig */
class __TwigTemplate_fb312565e7b9901233b950fb95356b8cfb4e78f645c4699500476d3cb3781086 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtUsageTarif/index.html.twig", 1);
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
        $__internal_d9e518f1f08f49c8c473a295a8f57c0d3ae5caa3440ceeba457c8d3481782b41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e518f1f08f49c8c473a295a8f57c0d3ae5caa3440ceeba457c8d3481782b41->enter($__internal_d9e518f1f08f49c8c473a295a8f57c0d3ae5caa3440ceeba457c8d3481782b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUsageTarif/index.html.twig"));

        $__internal_5aac3825f2121e64fa1498eb82a82ca56786198c4e778d470e4610d0098e39eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aac3825f2121e64fa1498eb82a82ca56786198c4e778d470e4610d0098e39eb->enter($__internal_5aac3825f2121e64fa1498eb82a82ca56786198c4e778d470e4610d0098e39eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUsageTarif/index.html.twig"));

        // line 5
        $context["menu_usage_tarif"] = true;
        // line 6
        $context["menu_usage_tarif_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9e518f1f08f49c8c473a295a8f57c0d3ae5caa3440ceeba457c8d3481782b41->leave($__internal_d9e518f1f08f49c8c473a295a8f57c0d3ae5caa3440ceeba457c8d3481782b41_prof);

        
        $__internal_5aac3825f2121e64fa1498eb82a82ca56786198c4e778d470e4610d0098e39eb->leave($__internal_5aac3825f2121e64fa1498eb82a82ca56786198c4e778d470e4610d0098e39eb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_74ebdd18aa92f64f6b769f001fbcf3a69164dfb9371c3ce8780e5e5fd905a12d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74ebdd18aa92f64f6b769f001fbcf3a69164dfb9371c3ce8780e5e5fd905a12d->enter($__internal_74ebdd18aa92f64f6b769f001fbcf3a69164dfb9371c3ce8780e5e5fd905a12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_02bde6263a847554af094a4ab25b8f538530136fa71424ce5bb50f8347275dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02bde6263a847554af094a4ab25b8f538530136fa71424ce5bb50f8347275dfd->enter($__internal_02bde6263a847554af094a4ab25b8f538530136fa71424ce5bb50f8347275dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des usages ";
        
        $__internal_02bde6263a847554af094a4ab25b8f538530136fa71424ce5bb50f8347275dfd->leave($__internal_02bde6263a847554af094a4ab25b8f538530136fa71424ce5bb50f8347275dfd_prof);

        
        $__internal_74ebdd18aa92f64f6b769f001fbcf3a69164dfb9371c3ce8780e5e5fd905a12d->leave($__internal_74ebdd18aa92f64f6b769f001fbcf3a69164dfb9371c3ce8780e5e5fd905a12d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccc55030bbffcf88da0ccff9b678546535678a5007d4c606008e2a229bb1019f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccc55030bbffcf88da0ccff9b678546535678a5007d4c606008e2a229bb1019f->enter($__internal_ccc55030bbffcf88da0ccff9b678546535678a5007d4c606008e2a229bb1019f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0dc106b8293bc240ff34d6df0faa629957ac8d318fc95e5ab057698240e920c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc106b8293bc240ff34d6df0faa629957ac8d318fc95e5ab057698240e920c2->enter($__internal_0dc106b8293bc240ff34d6df0faa629957ac8d318fc95e5ab057698240e920c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usage_tarif_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un tarif du usage
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usage_tarif_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-usage\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Nom</th>
                                    <th>Validit&eacute;</th>
                                    <th>Prix</th>
                                    <th>Type visite</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["usages"] ?? $this->getContext($context, "usages")));
        foreach ($context['_seq'] as $context["_key"] => $context["usage"]) {
            // line 60
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["usage"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usage"], "id", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["usage"], "usgLibelle", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["usage"], "usgValidite", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            ";
            // line 67
            if ($this->getAttribute($context["usage"], "usgTrfPrix", array(), "any", true, true)) {
                // line 68
                echo "                                                ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["usage"], "usgTrfPrix", array()), 0, ".", " "), "html", null, true);
                echo "
                                            ";
            }
            // line 70
            echo "                                        </td>
                                        <td>
                                            ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["usage"], "tpvLibelle", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usage_tarif_edit", array("id" => $this->getAttribute($context["usage"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usage_tarif_delete", array("id" => $this->getAttribute($context["usage"], "id", array()))), "html", null, true);
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
        // line 86
        echo "                            </tbody>
                        </table>

                        ";
        // line 90
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
        
        $__internal_0dc106b8293bc240ff34d6df0faa629957ac8d318fc95e5ab057698240e920c2->leave($__internal_0dc106b8293bc240ff34d6df0faa629957ac8d318fc95e5ab057698240e920c2_prof);

        
        $__internal_ccc55030bbffcf88da0ccff9b678546535678a5007d4c606008e2a229bb1019f->leave($__internal_ccc55030bbffcf88da0ccff9b678546535678a5007d4c606008e2a229bb1019f_prof);

    }

    // line 103
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d5d9e0f6d2fb1c8108c351d88ad213a53d452d80a49d20d251964ae10873f233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5d9e0f6d2fb1c8108c351d88ad213a53d452d80a49d20d251964ae10873f233->enter($__internal_d5d9e0f6d2fb1c8108c351d88ad213a53d452d80a49d20d251964ae10873f233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_66769b9e7470556db2e6d93a32b1f5275aea5182ce924e4661a7c85c8465cc4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66769b9e7470556db2e6d93a32b1f5275aea5182ce924e4661a7c85c8465cc4e->enter($__internal_66769b9e7470556db2e6d93a32b1f5275aea5182ce924e4661a7c85c8465cc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 104
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
        
        $__internal_66769b9e7470556db2e6d93a32b1f5275aea5182ce924e4661a7c85c8465cc4e->leave($__internal_66769b9e7470556db2e6d93a32b1f5275aea5182ce924e4661a7c85c8465cc4e_prof);

        
        $__internal_d5d9e0f6d2fb1c8108c351d88ad213a53d452d80a49d20d251964ae10873f233->leave($__internal_d5d9e0f6d2fb1c8108c351d88ad213a53d452d80a49d20d251964ae10873f233_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtUsageTarif/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 104,  261 => 103,  240 => 90,  235 => 86,  223 => 80,  216 => 76,  209 => 72,  205 => 70,  199 => 68,  197 => 67,  192 => 65,  188 => 64,  181 => 62,  177 => 60,  173 => 59,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% set menu_usage_tarif      = true %}
{% set menu_usage_tarif_list = true %}

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
                    <a href=\"{{ path('usage_tarif_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un tarif du usage
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('usage_tarif_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-usage\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Nom</th>
                                    <th>Validit&eacute;</th>
                                    <th>Prix</th>
                                    <th>Type visite</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for usage in usages %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ usage.id }}\" name=\"delete[]\" />{{ usage.id }}
                                        </td>
                                        <td>{{ usage.usgLibelle }}</td>
                                        <td>{{ usage.usgValidite }}</td>
                                        <td>
                                            {% if usage.usgTrfPrix is defined %}
                                                {{ usage.usgTrfPrix|number_format(0, '.', ' ') }}
                                            {% endif %}
                                        </td>
                                        <td>
                                            {{ usage.tpvLibelle }}
                                        </td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('usage_tarif_edit', { 'id': usage.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('usage_tarif_delete', { 'id': usage.id }) }}\">
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
", "@Admin/CtUsageTarif/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtUsageTarif\\index.html.twig");
    }
}
