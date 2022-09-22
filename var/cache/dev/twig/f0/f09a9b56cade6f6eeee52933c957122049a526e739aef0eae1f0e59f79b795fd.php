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
        $__internal_fc230dd9cd9fb49a5fd99e2d7f18422c32e5b7e5a0536c683818afcb19b9f537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc230dd9cd9fb49a5fd99e2d7f18422c32e5b7e5a0536c683818afcb19b9f537->enter($__internal_fc230dd9cd9fb49a5fd99e2d7f18422c32e5b7e5a0536c683818afcb19b9f537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTech/index.html.twig"));

        $__internal_c538764b32afd2dc204d8e80b4a72512aac4ea8cefe112b466ba9fb53ee3997a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c538764b32afd2dc204d8e80b4a72512aac4ea8cefe112b466ba9fb53ee3997a->enter($__internal_c538764b32afd2dc204d8e80b4a72512aac4ea8cefe112b466ba9fb53ee3997a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTech/index.html.twig"));

        // line 5
        $context["menu_imprime_tech"] = true;
        // line 6
        $context["menu_imprime_tech_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc230dd9cd9fb49a5fd99e2d7f18422c32e5b7e5a0536c683818afcb19b9f537->leave($__internal_fc230dd9cd9fb49a5fd99e2d7f18422c32e5b7e5a0536c683818afcb19b9f537_prof);

        
        $__internal_c538764b32afd2dc204d8e80b4a72512aac4ea8cefe112b466ba9fb53ee3997a->leave($__internal_c538764b32afd2dc204d8e80b4a72512aac4ea8cefe112b466ba9fb53ee3997a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_24e7b0e435ff176fce1b32bb1620a3f0de2bea9e546ca56bd8cb35b70da5a514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24e7b0e435ff176fce1b32bb1620a3f0de2bea9e546ca56bd8cb35b70da5a514->enter($__internal_24e7b0e435ff176fce1b32bb1620a3f0de2bea9e546ca56bd8cb35b70da5a514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_39107d7c0986452e097a9151de271af549a36a7ba09664a6103ab9be34fdbd17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39107d7c0986452e097a9151de271af549a36a7ba09664a6103ab9be34fdbd17->enter($__internal_39107d7c0986452e097a9151de271af549a36a7ba09664a6103ab9be34fdbd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des imprimés techniques ";
        
        $__internal_39107d7c0986452e097a9151de271af549a36a7ba09664a6103ab9be34fdbd17->leave($__internal_39107d7c0986452e097a9151de271af549a36a7ba09664a6103ab9be34fdbd17_prof);

        
        $__internal_24e7b0e435ff176fce1b32bb1620a3f0de2bea9e546ca56bd8cb35b70da5a514->leave($__internal_24e7b0e435ff176fce1b32bb1620a3f0de2bea9e546ca56bd8cb35b70da5a514_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d5b97b671cdb7ebaa43a5630764d1aca8f50304cfd7e7e6578809ca74f0bdbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d5b97b671cdb7ebaa43a5630764d1aca8f50304cfd7e7e6578809ca74f0bdbb->enter($__internal_1d5b97b671cdb7ebaa43a5630764d1aca8f50304cfd7e7e6578809ca74f0bdbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e627c63b702d10441b6382d2cdcca5fcea526734f7b3c8b2a1d52c2ea64938d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e627c63b702d10441b6382d2cdcca5fcea526734f7b3c8b2a1d52c2ea64938d9->enter($__internal_e627c63b702d10441b6382d2cdcca5fcea526734f7b3c8b2a1d52c2ea64938d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e627c63b702d10441b6382d2cdcca5fcea526734f7b3c8b2a1d52c2ea64938d9->leave($__internal_e627c63b702d10441b6382d2cdcca5fcea526734f7b3c8b2a1d52c2ea64938d9_prof);

        
        $__internal_1d5b97b671cdb7ebaa43a5630764d1aca8f50304cfd7e7e6578809ca74f0bdbb->leave($__internal_1d5b97b671cdb7ebaa43a5630764d1aca8f50304cfd7e7e6578809ca74f0bdbb_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a60130ab97be204a92a6c4f27b7c23e9c00d454b863f2687a82ccf6f5c51c37d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a60130ab97be204a92a6c4f27b7c23e9c00d454b863f2687a82ccf6f5c51c37d->enter($__internal_a60130ab97be204a92a6c4f27b7c23e9c00d454b863f2687a82ccf6f5c51c37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a9c9794e61aca3a933a5c1c92fa3b8ea2a7b3b4bfd8016496bb1af5285ad07ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c9794e61aca3a933a5c1c92fa3b8ea2a7b3b4bfd8016496bb1af5285ad07ef->enter($__internal_a9c9794e61aca3a933a5c1c92fa3b8ea2a7b3b4bfd8016496bb1af5285ad07ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_a9c9794e61aca3a933a5c1c92fa3b8ea2a7b3b4bfd8016496bb1af5285ad07ef->leave($__internal_a9c9794e61aca3a933a5c1c92fa3b8ea2a7b3b4bfd8016496bb1af5285ad07ef_prof);

        
        $__internal_a60130ab97be204a92a6c4f27b7c23e9c00d454b863f2687a82ccf6f5c51c37d->leave($__internal_a60130ab97be204a92a6c4f27b7c23e9c00d454b863f2687a82ccf6f5c51c37d_prof);

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
