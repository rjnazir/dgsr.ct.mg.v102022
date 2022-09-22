<?php

/* AdminBundle:CtZoneDeserte:index.html.twig */
class __TwigTemplate_5fc1e503a18a9b95be636f55c40a54205545c703bf0702afe386d307aa30fc10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtZoneDeserte:index.html.twig", 1);
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
        $__internal_6ce872041c57720d839747cdccf6e7d6a5ea1d7416d6e94a5b09e7763165298e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce872041c57720d839747cdccf6e7d6a5ea1d7416d6e94a5b09e7763165298e->enter($__internal_6ce872041c57720d839747cdccf6e7d6a5ea1d7416d6e94a5b09e7763165298e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtZoneDeserte:index.html.twig"));

        $__internal_239d08d22abebe771c43008adb017bc005bad9cc190a51690e6d31a498280d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_239d08d22abebe771c43008adb017bc005bad9cc190a51690e6d31a498280d7c->enter($__internal_239d08d22abebe771c43008adb017bc005bad9cc190a51690e6d31a498280d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtZoneDeserte:index.html.twig"));

        // line 5
        $context["menu_zone_deserte"] = true;
        // line 6
        $context["menu_zone_deserte_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ce872041c57720d839747cdccf6e7d6a5ea1d7416d6e94a5b09e7763165298e->leave($__internal_6ce872041c57720d839747cdccf6e7d6a5ea1d7416d6e94a5b09e7763165298e_prof);

        
        $__internal_239d08d22abebe771c43008adb017bc005bad9cc190a51690e6d31a498280d7c->leave($__internal_239d08d22abebe771c43008adb017bc005bad9cc190a51690e6d31a498280d7c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_41fad64c608231973c56ec7abf46a1273c12ecd8e8ba22db5adb53110a1a6998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41fad64c608231973c56ec7abf46a1273c12ecd8e8ba22db5adb53110a1a6998->enter($__internal_41fad64c608231973c56ec7abf46a1273c12ecd8e8ba22db5adb53110a1a6998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c543bc0a961b6a849fdd5ec51f796cc11369291bc28dd57c0272197eeeeb2ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c543bc0a961b6a849fdd5ec51f796cc11369291bc28dd57c0272197eeeeb2ca7->enter($__internal_c543bc0a961b6a849fdd5ec51f796cc11369291bc28dd57c0272197eeeeb2ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des zones de déserte ";
        
        $__internal_c543bc0a961b6a849fdd5ec51f796cc11369291bc28dd57c0272197eeeeb2ca7->leave($__internal_c543bc0a961b6a849fdd5ec51f796cc11369291bc28dd57c0272197eeeeb2ca7_prof);

        
        $__internal_41fad64c608231973c56ec7abf46a1273c12ecd8e8ba22db5adb53110a1a6998->leave($__internal_41fad64c608231973c56ec7abf46a1273c12ecd8e8ba22db5adb53110a1a6998_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_5832282b1995ab01fd17c6ab7c0d7f456b90c3919924765eb63ec1fac506276c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5832282b1995ab01fd17c6ab7c0d7f456b90c3919924765eb63ec1fac506276c->enter($__internal_5832282b1995ab01fd17c6ab7c0d7f456b90c3919924765eb63ec1fac506276c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bece7423bc43d5bcfd8d2aefe6f34925f692284d2dffa2b6ad12e210f05e3ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bece7423bc43d5bcfd8d2aefe6f34925f692284d2dffa2b6ad12e210f05e3ae4->enter($__internal_bece7423bc43d5bcfd8d2aefe6f34925f692284d2dffa2b6ad12e210f05e3ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_deserte_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une zone de déserte
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_deserte_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-zone_deserte\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["zone_desertes"] ?? $this->getContext($context, "zone_desertes")));
        foreach ($context['_seq'] as $context["_key"] => $context["zone_deserte"]) {
            // line 51
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["zone_deserte"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["zone_deserte"], "zdLibelle", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_deserte_edit", array("id" => $this->getAttribute($context["zone_deserte"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_deserte_delete", array("id" => $this->getAttribute($context["zone_deserte"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zone_deserte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                            </tbody>
                        </table>

                        ";
        // line 72
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
        
        $__internal_bece7423bc43d5bcfd8d2aefe6f34925f692284d2dffa2b6ad12e210f05e3ae4->leave($__internal_bece7423bc43d5bcfd8d2aefe6f34925f692284d2dffa2b6ad12e210f05e3ae4_prof);

        
        $__internal_5832282b1995ab01fd17c6ab7c0d7f456b90c3919924765eb63ec1fac506276c->leave($__internal_5832282b1995ab01fd17c6ab7c0d7f456b90c3919924765eb63ec1fac506276c_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7ea63e449032ec2fafe824870317af3f0fb615ab54a59e47c13744c7f53f1abd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea63e449032ec2fafe824870317af3f0fb615ab54a59e47c13744c7f53f1abd->enter($__internal_7ea63e449032ec2fafe824870317af3f0fb615ab54a59e47c13744c7f53f1abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_32ce77f9814819fabd6a51f5247c4668be12602b835ae103e83386e849e83fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ce77f9814819fabd6a51f5247c4668be12602b835ae103e83386e849e83fe0->enter($__internal_32ce77f9814819fabd6a51f5247c4668be12602b835ae103e83386e849e83fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-zone_deserte').DataTable(
            {
                \"aaSorting\": [],
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
                    \"sEmptyTable\": \"Aucune zone de déserte trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_32ce77f9814819fabd6a51f5247c4668be12602b835ae103e83386e849e83fe0->leave($__internal_32ce77f9814819fabd6a51f5247c4668be12602b835ae103e83386e849e83fe0_prof);

        
        $__internal_7ea63e449032ec2fafe824870317af3f0fb615ab54a59e47c13744c7f53f1abd->leave($__internal_7ea63e449032ec2fafe824870317af3f0fb615ab54a59e47c13744c7f53f1abd_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtZoneDeserte:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 86,  213 => 85,  192 => 72,  187 => 68,  175 => 62,  168 => 58,  162 => 55,  157 => 53,  153 => 51,  149 => 50,  135 => 39,  124 => 31,  121 => 30,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des zones de déserte {% endblock %}

{% set menu_zone_deserte      = true %}
{% set menu_zone_deserte_list = true %}

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
                <div class=\"row add-btn-top-list\">
                    <a href=\"{{ path('zone_deserte_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une zone de déserte
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('zone_deserte_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-zone_deserte\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for zone_deserte in zone_desertes %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ zone_deserte.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ zone_deserte.zdLibelle }}</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('zone_deserte_edit', { 'id': zone_deserte.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('zone_deserte_delete', { 'id': zone_deserte.id }) }}\">
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
            \$('#list-zone_deserte').DataTable(
            {
                \"aaSorting\": [],
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
                    \"sEmptyTable\": \"Aucune zone de déserte trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "AdminBundle:CtZoneDeserte:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtZoneDeserte/index.html.twig");
    }
}
