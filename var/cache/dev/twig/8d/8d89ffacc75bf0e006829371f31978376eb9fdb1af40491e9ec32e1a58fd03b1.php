<?php

/* AdminBundle:CtCarosserie:index.html.twig */
class __TwigTemplate_f9286cba3e55e79b9b0141a2e4f110c4c3c39db96ea66f12067ce5ed9bd3acf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtCarosserie:index.html.twig", 1);
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
        $__internal_69f8f5bebc6650de3f157155b712b574ea2913f961163b9e8a342c4f22127e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69f8f5bebc6650de3f157155b712b574ea2913f961163b9e8a342c4f22127e98->enter($__internal_69f8f5bebc6650de3f157155b712b574ea2913f961163b9e8a342c4f22127e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCarosserie:index.html.twig"));

        $__internal_0a62dd118827bcacd9ad13b25cb81753a766c093a6275d50837a0e3f73111c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a62dd118827bcacd9ad13b25cb81753a766c093a6275d50837a0e3f73111c63->enter($__internal_0a62dd118827bcacd9ad13b25cb81753a766c093a6275d50837a0e3f73111c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCarosserie:index.html.twig"));

        // line 5
        $context["menu_carosserie"] = true;
        // line 6
        $context["menu_carosserie_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69f8f5bebc6650de3f157155b712b574ea2913f961163b9e8a342c4f22127e98->leave($__internal_69f8f5bebc6650de3f157155b712b574ea2913f961163b9e8a342c4f22127e98_prof);

        
        $__internal_0a62dd118827bcacd9ad13b25cb81753a766c093a6275d50837a0e3f73111c63->leave($__internal_0a62dd118827bcacd9ad13b25cb81753a766c093a6275d50837a0e3f73111c63_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_19dec1182712b7067b20e4ba9c331e73435cc9a5c056b9ee2baa8454e2c2208f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19dec1182712b7067b20e4ba9c331e73435cc9a5c056b9ee2baa8454e2c2208f->enter($__internal_19dec1182712b7067b20e4ba9c331e73435cc9a5c056b9ee2baa8454e2c2208f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_88c846e6e4a2adf9069d49859361b1ec44c19fc5533777d87bdf9b622c13ee66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c846e6e4a2adf9069d49859361b1ec44c19fc5533777d87bdf9b622c13ee66->enter($__internal_88c846e6e4a2adf9069d49859361b1ec44c19fc5533777d87bdf9b622c13ee66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des carrosseries ";
        
        $__internal_88c846e6e4a2adf9069d49859361b1ec44c19fc5533777d87bdf9b622c13ee66->leave($__internal_88c846e6e4a2adf9069d49859361b1ec44c19fc5533777d87bdf9b622c13ee66_prof);

        
        $__internal_19dec1182712b7067b20e4ba9c331e73435cc9a5c056b9ee2baa8454e2c2208f->leave($__internal_19dec1182712b7067b20e4ba9c331e73435cc9a5c056b9ee2baa8454e2c2208f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1625b3edfa6fe98ec280eacd50c2b0b90569fbbf31bbda8be6881cb67d31df78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1625b3edfa6fe98ec280eacd50c2b0b90569fbbf31bbda8be6881cb67d31df78->enter($__internal_1625b3edfa6fe98ec280eacd50c2b0b90569fbbf31bbda8be6881cb67d31df78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41a448f72c685fc66fde1dbe9640bc40b30167fe6bcdeab5fcb248b8dbf4de25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a448f72c685fc66fde1dbe9640bc40b30167fe6bcdeab5fcb248b8dbf4de25->enter($__internal_41a448f72c685fc66fde1dbe9640bc40b30167fe6bcdeab5fcb248b8dbf4de25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carosserie_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une carrosserie
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carosserie_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-carosserie\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Nom</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["carosseries"] ?? $this->getContext($context, "carosseries")));
        foreach ($context['_seq'] as $context["_key"] => $context["carosserie"]) {
            // line 57
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["carosserie"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["carosserie"], "crsLibelle", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carosserie_edit", array("id" => $this->getAttribute($context["carosserie"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carosserie_delete", array("id" => $this->getAttribute($context["carosserie"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carosserie'], $context['_parent'], $context['loop']);
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
        
        $__internal_41a448f72c685fc66fde1dbe9640bc40b30167fe6bcdeab5fcb248b8dbf4de25->leave($__internal_41a448f72c685fc66fde1dbe9640bc40b30167fe6bcdeab5fcb248b8dbf4de25_prof);

        
        $__internal_1625b3edfa6fe98ec280eacd50c2b0b90569fbbf31bbda8be6881cb67d31df78->leave($__internal_1625b3edfa6fe98ec280eacd50c2b0b90569fbbf31bbda8be6881cb67d31df78_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3cc70dd3488d6af8ec1d042a2bfe7e0da30ac996e4c187fe81637c56341abe68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc70dd3488d6af8ec1d042a2bfe7e0da30ac996e4c187fe81637c56341abe68->enter($__internal_3cc70dd3488d6af8ec1d042a2bfe7e0da30ac996e4c187fe81637c56341abe68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8a153890825b37fb42701e175caf6d87e8cae5dc7cb03dcd1b7c1fddd401b518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a153890825b37fb42701e175caf6d87e8cae5dc7cb03dcd1b7c1fddd401b518->enter($__internal_8a153890825b37fb42701e175caf6d87e8cae5dc7cb03dcd1b7c1fddd401b518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-carosserie').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sZeroRecords\": \"Aucun enregistrement correspondant trouvé\",
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sInfoFiltered\":   \"(filtré à partir de _MAX_ entrées)\",
                    \"sInfoEmpty\":      \"afficher de 0 à 0 sur 0 entrées\",
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucune carrosserie trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_8a153890825b37fb42701e175caf6d87e8cae5dc7cb03dcd1b7c1fddd401b518->leave($__internal_8a153890825b37fb42701e175caf6d87e8cae5dc7cb03dcd1b7c1fddd401b518_prof);

        
        $__internal_3cc70dd3488d6af8ec1d042a2bfe7e0da30ac996e4c187fe81637c56341abe68->leave($__internal_3cc70dd3488d6af8ec1d042a2bfe7e0da30ac996e4c187fe81637c56341abe68_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtCarosserie:index.html.twig";
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

{% block title %}{{ parent() }} Liste des carrosseries {% endblock %}

{% set menu_carosserie      = true %}
{% set menu_carosserie_list = true %}

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
                    <a href=\"{{ path('carosserie_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une carrosserie
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('carosserie_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-carosserie\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Nom</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for carosserie in carosseries %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ carosserie.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>{{ carosserie.crsLibelle }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('carosserie_edit', { 'id': carosserie.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('carosserie_delete', { 'id': carosserie.id }) }}\">
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
            \$('#list-carosserie').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sZeroRecords\": \"Aucun enregistrement correspondant trouvé\",
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sInfoFiltered\":   \"(filtré à partir de _MAX_ entrées)\",
                    \"sInfoEmpty\":      \"afficher de 0 à 0 sur 0 entrées\",
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucune carrosserie trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "AdminBundle:CtCarosserie:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtCarosserie/index.html.twig");
    }
}
