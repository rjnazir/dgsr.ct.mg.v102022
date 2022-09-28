<?php

/* AdminBundle:CtTypeConstatationAvDedouanement:index.html.twig */
class __TwigTemplate_0aa9e61b19257bff3357568177c57fb17659156b2d01f42ff7f1d2a165080f26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeConstatationAvDedouanement:index.html.twig", 1);
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
        $__internal_4c93a197c92e4c8430318d6199ea3ed4c579de0386fe1ab2e4205fc374a5f087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c93a197c92e4c8430318d6199ea3ed4c579de0386fe1ab2e4205fc374a5f087->enter($__internal_4c93a197c92e4c8430318d6199ea3ed4c579de0386fe1ab2e4205fc374a5f087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeConstatationAvDedouanement:index.html.twig"));

        $__internal_37544de0c8a62334c8f9bd1f8a3a70060bbaa26fd19bb5c66c1a1052f9a3699f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37544de0c8a62334c8f9bd1f8a3a70060bbaa26fd19bb5c66c1a1052f9a3699f->enter($__internal_37544de0c8a62334c8f9bd1f8a3a70060bbaa26fd19bb5c66c1a1052f9a3699f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeConstatationAvDedouanement:index.html.twig"));

        // line 5
        $context["menu_const_av_ded_type"] = true;
        // line 6
        $context["menu_const_av_ded_type_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c93a197c92e4c8430318d6199ea3ed4c579de0386fe1ab2e4205fc374a5f087->leave($__internal_4c93a197c92e4c8430318d6199ea3ed4c579de0386fe1ab2e4205fc374a5f087_prof);

        
        $__internal_37544de0c8a62334c8f9bd1f8a3a70060bbaa26fd19bb5c66c1a1052f9a3699f->leave($__internal_37544de0c8a62334c8f9bd1f8a3a70060bbaa26fd19bb5c66c1a1052f9a3699f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_da5933b8df0a9c2ae546b91a42a390eedd574c7f7c1428d4db831127de0dd8d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da5933b8df0a9c2ae546b91a42a390eedd574c7f7c1428d4db831127de0dd8d2->enter($__internal_da5933b8df0a9c2ae546b91a42a390eedd574c7f7c1428d4db831127de0dd8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6fa5bb0f03357c6ce1910900ac386d7be4f341c3c0aea11bb84726ddb32e231d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa5bb0f03357c6ce1910900ac386d7be4f341c3c0aea11bb84726ddb32e231d->enter($__internal_6fa5bb0f03357c6ce1910900ac386d7be4f341c3c0aea11bb84726ddb32e231d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des types de constatations ";
        
        $__internal_6fa5bb0f03357c6ce1910900ac386d7be4f341c3c0aea11bb84726ddb32e231d->leave($__internal_6fa5bb0f03357c6ce1910900ac386d7be4f341c3c0aea11bb84726ddb32e231d_prof);

        
        $__internal_da5933b8df0a9c2ae546b91a42a390eedd574c7f7c1428d4db831127de0dd8d2->leave($__internal_da5933b8df0a9c2ae546b91a42a390eedd574c7f7c1428d4db831127de0dd8d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_18a2861bf4af48d8006f3055795e4b728d20dfef504bdcf12ca62077b7158351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18a2861bf4af48d8006f3055795e4b728d20dfef504bdcf12ca62077b7158351->enter($__internal_18a2861bf4af48d8006f3055795e4b728d20dfef504bdcf12ca62077b7158351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_37ef07fcd554be347e947b600bec763bfd279ba0de1b5b320275fcdd008e7d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ef07fcd554be347e947b600bec763bfd279ba0de1b5b320275fcdd008e7d47->enter($__internal_37ef07fcd554be347e947b600bec763bfd279ba0de1b5b320275fcdd008e7d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_const_av_ded_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un type de constatation avant dédouanement
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_const_av_ded_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-const-av-ded-type\" class=\"table table-bordered table-striped table-condensed\">
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
        $context['_seq'] = twig_ensure_traversable(($context["constatations"] ?? $this->getContext($context, "constatations")));
        foreach ($context['_seq'] as $context["_key"] => $context["constatation"]) {
            // line 57
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["constatation"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["constatation"], "cadTpLibelle", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_const_av_ded_edit", array("id" => $this->getAttribute($context["constatation"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_const_av_ded_delete", array("id" => $this->getAttribute($context["constatation"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constatation'], $context['_parent'], $context['loop']);
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
        
        $__internal_37ef07fcd554be347e947b600bec763bfd279ba0de1b5b320275fcdd008e7d47->leave($__internal_37ef07fcd554be347e947b600bec763bfd279ba0de1b5b320275fcdd008e7d47_prof);

        
        $__internal_18a2861bf4af48d8006f3055795e4b728d20dfef504bdcf12ca62077b7158351->leave($__internal_18a2861bf4af48d8006f3055795e4b728d20dfef504bdcf12ca62077b7158351_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a993c055349ad9543ed8cade7e57efc722e3a7d6a5a1f8f2bb8da3c1d4d35f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a993c055349ad9543ed8cade7e57efc722e3a7d6a5a1f8f2bb8da3c1d4d35f2->enter($__internal_7a993c055349ad9543ed8cade7e57efc722e3a7d6a5a1f8f2bb8da3c1d4d35f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_44f253077a680d1996bfbec67ec13835a7a1ae790e1df7a69db4e107d78d3083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f253077a680d1996bfbec67ec13835a7a1ae790e1df7a69db4e107d78d3083->enter($__internal_44f253077a680d1996bfbec67ec13835a7a1ae790e1df7a69db4e107d78d3083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-const-av-ded-type').DataTable(
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
                        \"sEmptyTable\": \"Aucun type de constatation avant dédouanement trouvé\",
                        \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                    },
                    \"footerCallback\": function ( row, data, start, end, display ) {
                        \$('.title-count').html(display.length);
                    }
                });
        });
    </script>
";
        
        $__internal_44f253077a680d1996bfbec67ec13835a7a1ae790e1df7a69db4e107d78d3083->leave($__internal_44f253077a680d1996bfbec67ec13835a7a1ae790e1df7a69db4e107d78d3083_prof);

        
        $__internal_7a993c055349ad9543ed8cade7e57efc722e3a7d6a5a1f8f2bb8da3c1d4d35f2->leave($__internal_7a993c055349ad9543ed8cade7e57efc722e3a7d6a5a1f8f2bb8da3c1d4d35f2_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeConstatationAvDedouanement:index.html.twig";
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

{% block title %}{{ parent() }} Liste des types de constatations {% endblock %}

{% set menu_const_av_ded_type      = true %}
{% set menu_const_av_ded_type_list = true %}

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
                    <a href=\"{{ path('type_const_av_ded_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un type de constatation avant dédouanement
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('type_const_av_ded_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-const-av-ded-type\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for constatation in constatations %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ constatation.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ constatation.cadTpLibelle }}</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('type_const_av_ded_edit', { 'id': constatation.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('type_const_av_ded_delete', { 'id': constatation.id }) }}\">
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
            \$('#list-const-av-ded-type').DataTable(
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
                        \"sEmptyTable\": \"Aucun type de constatation avant dédouanement trouvé\",
                        \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                    },
                    \"footerCallback\": function ( row, data, start, end, display ) {
                        \$('.title-count').html(display.length);
                    }
                });
        });
    </script>
{% endblock %}
", "AdminBundle:CtTypeConstatationAvDedouanement:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeConstatationAvDedouanement/index.html.twig");
    }
}
