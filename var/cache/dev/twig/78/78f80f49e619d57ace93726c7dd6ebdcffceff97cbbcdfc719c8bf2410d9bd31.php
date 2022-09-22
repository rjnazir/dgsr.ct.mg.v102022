<?php

/* @Admin/CtTypeVisite/edit.html.twig */
class __TwigTemplate_eabc1eed81e93ee570099e854177c4ad96fbc70495a45a1455618efc0bb90551 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeVisite/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56597238d95179a3b98d96109e6d64b8b65fbc383cb763084e36d439a06fa8e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56597238d95179a3b98d96109e6d64b8b65fbc383cb763084e36d439a06fa8e7->enter($__internal_56597238d95179a3b98d96109e6d64b8b65fbc383cb763084e36d439a06fa8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeVisite/edit.html.twig"));

        $__internal_b4455dbd69d5b7f00624026330a90fd67e8ccb4a5eaa5c37a180925c9153921a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4455dbd69d5b7f00624026330a90fd67e8ccb4a5eaa5c37a180925c9153921a->enter($__internal_b4455dbd69d5b7f00624026330a90fd67e8ccb4a5eaa5c37a180925c9153921a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeVisite/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_visite"] = true;
        // line 8
        $context["menu_type_visite"] = true;
        // line 9
        $context["menu_type_visite_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56597238d95179a3b98d96109e6d64b8b65fbc383cb763084e36d439a06fa8e7->leave($__internal_56597238d95179a3b98d96109e6d64b8b65fbc383cb763084e36d439a06fa8e7_prof);

        
        $__internal_b4455dbd69d5b7f00624026330a90fd67e8ccb4a5eaa5c37a180925c9153921a->leave($__internal_b4455dbd69d5b7f00624026330a90fd67e8ccb4a5eaa5c37a180925c9153921a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_58c6c8064b09883e982f950e47e8f799120737bb8b08cbff1ec8e6c12d493aca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58c6c8064b09883e982f950e47e8f799120737bb8b08cbff1ec8e6c12d493aca->enter($__internal_58c6c8064b09883e982f950e47e8f799120737bb8b08cbff1ec8e6c12d493aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_26268b04049a07e9aff96d02494410c96c759924af4b8fecd24889ad29d6bab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26268b04049a07e9aff96d02494410c96c759924af4b8fecd24889ad29d6bab5->enter($__internal_26268b04049a07e9aff96d02494410c96c759924af4b8fecd24889ad29d6bab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type de visite ";
        
        $__internal_26268b04049a07e9aff96d02494410c96c759924af4b8fecd24889ad29d6bab5->leave($__internal_26268b04049a07e9aff96d02494410c96c759924af4b8fecd24889ad29d6bab5_prof);

        
        $__internal_58c6c8064b09883e982f950e47e8f799120737bb8b08cbff1ec8e6c12d493aca->leave($__internal_58c6c8064b09883e982f950e47e8f799120737bb8b08cbff1ec8e6c12d493aca_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b967ac5cbe59453311dcb48937bae3945f1a3c6f779573dc22228a0547dde4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b967ac5cbe59453311dcb48937bae3945f1a3c6f779573dc22228a0547dde4f->enter($__internal_6b967ac5cbe59453311dcb48937bae3945f1a3c6f779573dc22228a0547dde4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_203e509036dc6cb36e778a06fafc5c29db026c4d8d1e085b328d24c044269863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_203e509036dc6cb36e778a06fafc5c29db026c4d8d1e085b328d24c044269863->enter($__internal_203e509036dc6cb36e778a06fafc5c29db026c4d8d1e085b328d24c044269863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "        <div class=\"callout callout-success\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une type de visite</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "tpvLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_visite\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_visite_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_203e509036dc6cb36e778a06fafc5c29db026c4d8d1e085b328d24c044269863->leave($__internal_203e509036dc6cb36e778a06fafc5c29db026c4d8d1e085b328d24c044269863_prof);

        
        $__internal_6b967ac5cbe59453311dcb48937bae3945f1a3c6f779573dc22228a0547dde4f->leave($__internal_6b967ac5cbe59453311dcb48937bae3945f1a3c6f779573dc22228a0547dde4f_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeVisite/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  135 => 37,  127 => 32,  118 => 26,  112 => 22,  103 => 19,  100 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Type de visite {% endblock %}

{% set menu_visite             = true %}
{% set menu_type_visite        = true %}
{% set menu_type_visite_create = true %}

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
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une type de visite</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.tpvLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_visite\"/>
                        <a href=\"{{ path('type_visite_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtTypeVisite/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeVisite\\edit.html.twig");
    }
}
