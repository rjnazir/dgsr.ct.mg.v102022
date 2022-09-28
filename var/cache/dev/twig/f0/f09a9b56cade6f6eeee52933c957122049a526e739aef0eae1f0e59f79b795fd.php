<?php

/* @Admin/CtImprimeTech/index.html.twig */
class __TwigTemplate_b89cbed2e4b037dc492950cc1ced7b4fbcc3a47c9011a3a2b4536de6c78a5fe7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtImprimeTech/index.html.twig", 1);
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
        $__internal_3c1caa7defcfaa5fcff3f89d955a47509b9dc595d1ab89d9cab265bda89c645b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c1caa7defcfaa5fcff3f89d955a47509b9dc595d1ab89d9cab265bda89c645b->enter($__internal_3c1caa7defcfaa5fcff3f89d955a47509b9dc595d1ab89d9cab265bda89c645b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTech/index.html.twig"));

        $__internal_0c6354e06fb3b9190516b6c22c02e557e5f57bfcc33ebc1f343a37de2c90bea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6354e06fb3b9190516b6c22c02e557e5f57bfcc33ebc1f343a37de2c90bea7->enter($__internal_0c6354e06fb3b9190516b6c22c02e557e5f57bfcc33ebc1f343a37de2c90bea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTech/index.html.twig"));

        // line 5
        $context["menu_imprime_tech"] = true;
        // line 6
        $context["menu_imprime_tech_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c1caa7defcfaa5fcff3f89d955a47509b9dc595d1ab89d9cab265bda89c645b->leave($__internal_3c1caa7defcfaa5fcff3f89d955a47509b9dc595d1ab89d9cab265bda89c645b_prof);

        
        $__internal_0c6354e06fb3b9190516b6c22c02e557e5f57bfcc33ebc1f343a37de2c90bea7->leave($__internal_0c6354e06fb3b9190516b6c22c02e557e5f57bfcc33ebc1f343a37de2c90bea7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d09ef756885c57c687d2cbbd61a982aad2ed67467f9648bba41a1b4339671639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d09ef756885c57c687d2cbbd61a982aad2ed67467f9648bba41a1b4339671639->enter($__internal_d09ef756885c57c687d2cbbd61a982aad2ed67467f9648bba41a1b4339671639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f7e1d1afd132756f8d5eb5119d7c40ffd435aeb138dbce06495f174dee5361ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e1d1afd132756f8d5eb5119d7c40ffd435aeb138dbce06495f174dee5361ac->enter($__internal_f7e1d1afd132756f8d5eb5119d7c40ffd435aeb138dbce06495f174dee5361ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des imprimés techniques ";
        
        $__internal_f7e1d1afd132756f8d5eb5119d7c40ffd435aeb138dbce06495f174dee5361ac->leave($__internal_f7e1d1afd132756f8d5eb5119d7c40ffd435aeb138dbce06495f174dee5361ac_prof);

        
        $__internal_d09ef756885c57c687d2cbbd61a982aad2ed67467f9648bba41a1b4339671639->leave($__internal_d09ef756885c57c687d2cbbd61a982aad2ed67467f9648bba41a1b4339671639_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d64b721c2bb7c76e4ea5adc41a4f2558f23696fee040f8c838724a52723cebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d64b721c2bb7c76e4ea5adc41a4f2558f23696fee040f8c838724a52723cebf->enter($__internal_9d64b721c2bb7c76e4ea5adc41a4f2558f23696fee040f8c838724a52723cebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d8f8d1f20c6232e5a65897be5350785514cff697398f81a3c0e361bb1e94eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8f8d1f20c6232e5a65897be5350785514cff697398f81a3c0e361bb1e94eba->enter($__internal_7d8f8d1f20c6232e5a65897be5350785514cff697398f81a3c0e361bb1e94eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un imprimé technique
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"liste-imprime-tech\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Nom imprimé technique</th>
                                <th>Abréviation</th>
                                <th>Unité</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["imprime_techs"] ?? $this->getContext($context, "imprime_techs")));
        foreach ($context['_seq'] as $context["_key"] => $context["imprime_tech"]) {
            // line 59
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["imprime_tech"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["imprime_tech"], "nomImprimeTech", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["imprime_tech"], "abrevImprimeTech", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["imprime_tech"], "uteImprimeTech", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_edit", array("id" => $this->getAttribute($context["imprime_tech"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_delete", array("id" => $this->getAttribute($context["imprime_tech"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imprime_tech'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                            </tbody>
                        </table>

                        ";
        // line 82
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
        
        $__internal_7d8f8d1f20c6232e5a65897be5350785514cff697398f81a3c0e361bb1e94eba->leave($__internal_7d8f8d1f20c6232e5a65897be5350785514cff697398f81a3c0e361bb1e94eba_prof);

        
        $__internal_9d64b721c2bb7c76e4ea5adc41a4f2558f23696fee040f8c838724a52723cebf->leave($__internal_9d64b721c2bb7c76e4ea5adc41a4f2558f23696fee040f8c838724a52723cebf_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e943f1dd1de2e00c5e4109a2d2ab03e7b393de2b71b4090a030705076ed7f365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e943f1dd1de2e00c5e4109a2d2ab03e7b393de2b71b4090a030705076ed7f365->enter($__internal_e943f1dd1de2e00c5e4109a2d2ab03e7b393de2b71b4090a030705076ed7f365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_acd37cc2fecd597847e0e7677df208601db9d9e592a226a07e053396932148da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acd37cc2fecd597847e0e7677df208601db9d9e592a226a07e053396932148da->enter($__internal_acd37cc2fecd597847e0e7677df208601db9d9e592a226a07e053396932148da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#liste-imprime-tech').DataTable(
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
                    \"sEmptyTable\": \"Aucune marque trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_acd37cc2fecd597847e0e7677df208601db9d9e592a226a07e053396932148da->leave($__internal_acd37cc2fecd597847e0e7677df208601db9d9e592a226a07e053396932148da_prof);

        
        $__internal_e943f1dd1de2e00c5e4109a2d2ab03e7b393de2b71b4090a030705076ed7f365->leave($__internal_e943f1dd1de2e00c5e4109a2d2ab03e7b393de2b71b4090a030705076ed7f365_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtImprimeTech/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 96,  244 => 95,  223 => 82,  218 => 78,  206 => 72,  199 => 68,  193 => 65,  189 => 64,  185 => 63,  180 => 61,  176 => 59,  172 => 58,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des imprimés techniques {% endblock %}

{% set menu_imprime_tech      = true %}
{% set menu_imprime_tech_list = true %}

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
                    <a href=\"{{ path('imprime_tech_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un imprimé technique
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('imprime_tech_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"liste-imprime-tech\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Nom imprimé technique</th>
                                <th>Abréviation</th>
                                <th>Unité</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for imprime_tech in imprime_techs %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ imprime_tech.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ imprime_tech.nomImprimeTech }}</td>
                                    <td>{{ imprime_tech.abrevImprimeTech }}</td>
                                    <td>{{ imprime_tech.uteImprimeTech }}</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('imprime_tech_edit', { 'id': imprime_tech.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('imprime_tech_delete', { 'id': imprime_tech.id }) }}\">
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
            \$('#liste-imprime-tech').DataTable(
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
                    \"sEmptyTable\": \"Aucune marque trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "@Admin/CtImprimeTech/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtImprimeTech\\index.html.twig");
    }
}
