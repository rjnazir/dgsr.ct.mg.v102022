<?php

/* @Admin/CtTypeDroitPtac/index.html.twig */
class __TwigTemplate_edebfaf99811b6317acb348812ca0689bfa092b8a35d82ecda18cf1e8cf16d64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeDroitPtac/index.html.twig", 1);
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
        $__internal_1bd3728511aa021cc75fa004d3cc8199a07c5e5f7786eea6bc924566ebaa537b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bd3728511aa021cc75fa004d3cc8199a07c5e5f7786eea6bc924566ebaa537b->enter($__internal_1bd3728511aa021cc75fa004d3cc8199a07c5e5f7786eea6bc924566ebaa537b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeDroitPtac/index.html.twig"));

        $__internal_eadf580435fd4ef8bbdab20b4869fdc07fc0e1d09fbe8993b71665bbd1b8818a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eadf580435fd4ef8bbdab20b4869fdc07fc0e1d09fbe8993b71665bbd1b8818a->enter($__internal_eadf580435fd4ef8bbdab20b4869fdc07fc0e1d09fbe8993b71665bbd1b8818a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeDroitPtac/index.html.twig"));

        // line 5
        $context["menu_type_droit_ptac"] = true;
        // line 6
        $context["menu_type_droit_ptac_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bd3728511aa021cc75fa004d3cc8199a07c5e5f7786eea6bc924566ebaa537b->leave($__internal_1bd3728511aa021cc75fa004d3cc8199a07c5e5f7786eea6bc924566ebaa537b_prof);

        
        $__internal_eadf580435fd4ef8bbdab20b4869fdc07fc0e1d09fbe8993b71665bbd1b8818a->leave($__internal_eadf580435fd4ef8bbdab20b4869fdc07fc0e1d09fbe8993b71665bbd1b8818a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_39791d9ceb387c70fb8d79a03761a85f68d48e34067142abede7e2138c42bb67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39791d9ceb387c70fb8d79a03761a85f68d48e34067142abede7e2138c42bb67->enter($__internal_39791d9ceb387c70fb8d79a03761a85f68d48e34067142abede7e2138c42bb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_438303e2fde3540e11c419ff925afff09f1b68c4bea8569d945b15f6a425661f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_438303e2fde3540e11c419ff925afff09f1b68c4bea8569d945b15f6a425661f->enter($__internal_438303e2fde3540e11c419ff925afff09f1b68c4bea8569d945b15f6a425661f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des types de droit PTAC ";
        
        $__internal_438303e2fde3540e11c419ff925afff09f1b68c4bea8569d945b15f6a425661f->leave($__internal_438303e2fde3540e11c419ff925afff09f1b68c4bea8569d945b15f6a425661f_prof);

        
        $__internal_39791d9ceb387c70fb8d79a03761a85f68d48e34067142abede7e2138c42bb67->leave($__internal_39791d9ceb387c70fb8d79a03761a85f68d48e34067142abede7e2138c42bb67_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_960bb48aa39e409d805e46ee98874092dcbf8cd36e8812dbb62665417e6dc7a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_960bb48aa39e409d805e46ee98874092dcbf8cd36e8812dbb62665417e6dc7a0->enter($__internal_960bb48aa39e409d805e46ee98874092dcbf8cd36e8812dbb62665417e6dc7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f53c35253958fa81754d645f1ad0f55bd5e9d4ad0fc8e666d9930e143fa44b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f53c35253958fa81754d645f1ad0f55bd5e9d4ad0fc8e666d9930e143fa44b9f->enter($__internal_f53c35253958fa81754d645f1ad0f55bd5e9d4ad0fc8e666d9930e143fa44b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_droit_ptac_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un type de droit PTAC
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_droit_ptac_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-type-droit_ptac\" class=\"table table-bordered table-striped table-condensed\">
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
        $context['_seq'] = twig_ensure_traversable(($context["type_droit_ptacs"] ?? $this->getContext($context, "type_droit_ptacs")));
        foreach ($context['_seq'] as $context["_key"] => $context["type_droit_ptac"]) {
            // line 57
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["type_droit_ptac"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["type_droit_ptac"], "tpDpLibelle", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_droit_ptac_edit", array("id" => $this->getAttribute($context["type_droit_ptac"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_droit_ptac_delete", array("id" => $this->getAttribute($context["type_droit_ptac"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type_droit_ptac'], $context['_parent'], $context['loop']);
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
        
        $__internal_f53c35253958fa81754d645f1ad0f55bd5e9d4ad0fc8e666d9930e143fa44b9f->leave($__internal_f53c35253958fa81754d645f1ad0f55bd5e9d4ad0fc8e666d9930e143fa44b9f_prof);

        
        $__internal_960bb48aa39e409d805e46ee98874092dcbf8cd36e8812dbb62665417e6dc7a0->leave($__internal_960bb48aa39e409d805e46ee98874092dcbf8cd36e8812dbb62665417e6dc7a0_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_92fcf8b16f4c9c03e308a7c36bfe144c45925de34f38d31264ed4fbc4662e781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92fcf8b16f4c9c03e308a7c36bfe144c45925de34f38d31264ed4fbc4662e781->enter($__internal_92fcf8b16f4c9c03e308a7c36bfe144c45925de34f38d31264ed4fbc4662e781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cbd22538e7799b1eedbf211f8f005a9cee387573f7daa0a22002e0f77c933fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbd22538e7799b1eedbf211f8f005a9cee387573f7daa0a22002e0f77c933fec->enter($__internal_cbd22538e7799b1eedbf211f8f005a9cee387573f7daa0a22002e0f77c933fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-type-droit_ptac').DataTable(
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
                    \"sEmptyTable\": \"Aucun type de droit ptac trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_cbd22538e7799b1eedbf211f8f005a9cee387573f7daa0a22002e0f77c933fec->leave($__internal_cbd22538e7799b1eedbf211f8f005a9cee387573f7daa0a22002e0f77c933fec_prof);

        
        $__internal_92fcf8b16f4c9c03e308a7c36bfe144c45925de34f38d31264ed4fbc4662e781->leave($__internal_92fcf8b16f4c9c03e308a7c36bfe144c45925de34f38d31264ed4fbc4662e781_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeDroitPtac/index.html.twig";
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

{% block title %}{{ parent() }} Liste des types de droit PTAC {% endblock %}

{% set menu_type_droit_ptac      = true %}
{% set menu_type_droit_ptac_list = true %}

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
                    <a href=\"{{ path('type_droit_ptac_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un type de droit PTAC
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('type_droit_ptac_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-type-droit_ptac\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Libellé</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for type_droit_ptac in type_droit_ptacs %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ type_droit_ptac.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>{{ type_droit_ptac.tpDpLibelle }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('type_droit_ptac_edit', { 'id': type_droit_ptac.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('type_droit_ptac_delete', { 'id': type_droit_ptac.id }) }}\">
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
            \$('#list-type-droit_ptac').DataTable(
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
                    \"sEmptyTable\": \"Aucun type de droit ptac trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "@Admin/CtTypeDroitPtac/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeDroitPtac\\index.html.twig");
    }
}
