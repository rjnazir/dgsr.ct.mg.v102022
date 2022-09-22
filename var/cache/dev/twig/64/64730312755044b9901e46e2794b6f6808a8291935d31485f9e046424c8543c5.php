<?php

/* AdminBundle:CtTypeAnomalie:index.html.twig */
class __TwigTemplate_1ae25ff5f1105b380ac4f9fe49dba859682ad2ad0c9c881d41534a1d01818f77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeAnomalie:index.html.twig", 1);
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
        $__internal_da9034a35712a8e9a2f7abc6068e09cafa1e28d95a8f87909d962f5f50de5caa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da9034a35712a8e9a2f7abc6068e09cafa1e28d95a8f87909d962f5f50de5caa->enter($__internal_da9034a35712a8e9a2f7abc6068e09cafa1e28d95a8f87909d962f5f50de5caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeAnomalie:index.html.twig"));

        $__internal_11a0032b30a02b80e60bbbec58696ac3ab2a24af60a84bc0a8652c19a7706858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a0032b30a02b80e60bbbec58696ac3ab2a24af60a84bc0a8652c19a7706858->enter($__internal_11a0032b30a02b80e60bbbec58696ac3ab2a24af60a84bc0a8652c19a7706858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeAnomalie:index.html.twig"));

        // line 5
        $context["menu_anomalie"] = true;
        // line 6
        $context["menu_type_anomalie"] = true;
        // line 7
        $context["menu_type_anomalie_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da9034a35712a8e9a2f7abc6068e09cafa1e28d95a8f87909d962f5f50de5caa->leave($__internal_da9034a35712a8e9a2f7abc6068e09cafa1e28d95a8f87909d962f5f50de5caa_prof);

        
        $__internal_11a0032b30a02b80e60bbbec58696ac3ab2a24af60a84bc0a8652c19a7706858->leave($__internal_11a0032b30a02b80e60bbbec58696ac3ab2a24af60a84bc0a8652c19a7706858_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_45146c11561ed1e8403b97a245e2b9afbc3b3d390c24116304fc69d5b48df211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45146c11561ed1e8403b97a245e2b9afbc3b3d390c24116304fc69d5b48df211->enter($__internal_45146c11561ed1e8403b97a245e2b9afbc3b3d390c24116304fc69d5b48df211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eaaa7d25b24ebe6e24062211b91f88a0e772119ae295f0166dcd263902e31b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaaa7d25b24ebe6e24062211b91f88a0e772119ae295f0166dcd263902e31b0c->enter($__internal_eaaa7d25b24ebe6e24062211b91f88a0e772119ae295f0166dcd263902e31b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des types d' anomalies ";
        
        $__internal_eaaa7d25b24ebe6e24062211b91f88a0e772119ae295f0166dcd263902e31b0c->leave($__internal_eaaa7d25b24ebe6e24062211b91f88a0e772119ae295f0166dcd263902e31b0c_prof);

        
        $__internal_45146c11561ed1e8403b97a245e2b9afbc3b3d390c24116304fc69d5b48df211->leave($__internal_45146c11561ed1e8403b97a245e2b9afbc3b3d390c24116304fc69d5b48df211_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3abca481775c55f338ba5e4f411ecb511cca96dbf07eec385e84d9421a5c04da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3abca481775c55f338ba5e4f411ecb511cca96dbf07eec385e84d9421a5c04da->enter($__internal_3abca481775c55f338ba5e4f411ecb511cca96dbf07eec385e84d9421a5c04da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e08da5dff11f0e7d9cd2a6fbca7e4f86fbc8fef16c8d37d213526d7a545073d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e08da5dff11f0e7d9cd2a6fbca7e4f86fbc8fef16c8d37d213526d7a545073d->enter($__internal_7e08da5dff11f0e7d9cd2a6fbca7e4f86fbc8fef16c8d37d213526d7a545073d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"callout callout-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 22
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 23
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
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
        // line 37
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_anomalie_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un type d'anomalie
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_anomalie_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-type-anomalie\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <td>Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["type_anomalies"] ?? $this->getContext($context, "type_anomalies")));
        foreach ($context['_seq'] as $context["_key"] => $context["type_anomalie"]) {
            // line 58
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["type_anomalie"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["type_anomalie"], "atpLibelle", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_anomalie_edit", array("id" => $this->getAttribute($context["type_anomalie"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_anomalie_delete", array("id" => $this->getAttribute($context["type_anomalie"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type_anomalie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                            </tbody>
                        </table>

                        ";
        // line 79
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
        
        $__internal_7e08da5dff11f0e7d9cd2a6fbca7e4f86fbc8fef16c8d37d213526d7a545073d->leave($__internal_7e08da5dff11f0e7d9cd2a6fbca7e4f86fbc8fef16c8d37d213526d7a545073d_prof);

        
        $__internal_3abca481775c55f338ba5e4f411ecb511cca96dbf07eec385e84d9421a5c04da->leave($__internal_3abca481775c55f338ba5e4f411ecb511cca96dbf07eec385e84d9421a5c04da_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_17cf4bc8c02b6acff918a8287a8b9ee210cabc86802f2026d1e8b0e6b1281474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17cf4bc8c02b6acff918a8287a8b9ee210cabc86802f2026d1e8b0e6b1281474->enter($__internal_17cf4bc8c02b6acff918a8287a8b9ee210cabc86802f2026d1e8b0e6b1281474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5b9426f0c79ed6367f7f394da977c2d6ef7dbffe55c25ef28f399b6bdf331de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9426f0c79ed6367f7f394da977c2d6ef7dbffe55c25ef28f399b6bdf331de9->enter($__internal_5b9426f0c79ed6367f7f394da977c2d6ef7dbffe55c25ef28f399b6bdf331de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-type-anomalie').DataTable(
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
                    \"sEmptyTable\": \"Aucun type anomalie trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_5b9426f0c79ed6367f7f394da977c2d6ef7dbffe55c25ef28f399b6bdf331de9->leave($__internal_5b9426f0c79ed6367f7f394da977c2d6ef7dbffe55c25ef28f399b6bdf331de9_prof);

        
        $__internal_17cf4bc8c02b6acff918a8287a8b9ee210cabc86802f2026d1e8b0e6b1281474->leave($__internal_17cf4bc8c02b6acff918a8287a8b9ee210cabc86802f2026d1e8b0e6b1281474_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeAnomalie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 93,  236 => 92,  215 => 79,  210 => 75,  198 => 69,  191 => 65,  185 => 62,  180 => 60,  176 => 58,  172 => 57,  158 => 46,  147 => 38,  144 => 37,  132 => 26,  123 => 23,  118 => 22,  114 => 21,  111 => 20,  102 => 17,  99 => 16,  94 => 15,  85 => 12,  82 => 11,  77 => 10,  68 => 9,  49 => 3,  39 => 1,  37 => 7,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des types d' anomalies {% endblock %}

{% set menu_anomalie           = true %}
{% set menu_type_anomalie      = true %}
{% set menu_type_anomalie_list = true %}

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
                    <a href=\"{{ path('type_anomalie_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un type d'anomalie
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('type_anomalie_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-type-anomalie\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <td>Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            {% for type_anomalie in type_anomalies %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ type_anomalie.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ type_anomalie.atpLibelle }}</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('type_anomalie_edit', { 'id': type_anomalie.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('type_anomalie_delete', { 'id': type_anomalie.id }) }}\">
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
            \$('#list-type-anomalie').DataTable(
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
                    \"sEmptyTable\": \"Aucun type anomalie trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "AdminBundle:CtTypeAnomalie:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeAnomalie/index.html.twig");
    }
}
